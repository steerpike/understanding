<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Media;
use App\Requests\Wikipedia;
use App\Person;
use App\Book;
use Carbon\Carbon;
use Curl\Curl;

set_time_limit(1000);
ini_set('memory_limit', '-1'); 
error_reporting(E_ALL ^ E_WARNING);

class TestController extends Controller
{
    //
    public function test()
    {
        $people = Person::whereNull('linked_articles')->get();
        foreach($people as $person){
            $wiki = new Wikipedia($person->name);
            $wiki->getWhatLinksHere();
            $person->linked_articles = $wiki->getTotalLinkedArticles();
            echo "Looking up: ".$person->name." who has ".$wiki->getTotalLinkedArticles()."<br />";
            $person->save();
        }
    }
    public function media()
    {
        //Storage::append('logs/events.log', 'Appended Text');
        $media = Media::where('description', 'like', '%song%')
                        ->orWhere('description', 'like', '%lyric%')
                        ->orWhere('description', 'like', '%band%')
                        ->orWhere('title', 'like', '%band%')
                        ->orWhere('title', 'like', '%song%')
                        ->orWhere('title', 'like', '%lyric%')
                        ->orWhere('title', 'like', '%pumba%')
                        ->whereNull('deleted_at')
                        ->get();
        foreach($media as $video) {
            echo "This video: ".$video->id.": ".$video->title."<br />".
            $video->description."<br />";
            //$video->deleted_at = date("Y-m-d H:i:s");
            //$video->save();
        }
    }
    public function raw() 
    {
    
        $people = Person::where('id', '=', 824)->get();
        foreach($people as $person){
            $wiki_name = $person->wikipedia_canonical_path;
            $first_letter = substr($person->wikipedia_canonical_path, 0, 1);
            $url = "https://en.wikipedia.org/w/index.php?action=raw&title=".$wiki_name;
            $result = file_get_contents($url);
            Storage::disk('local')->put("/philosophers/".$first_letter."/".$wiki_name.".txt", $result);
            echo "Retrieved ".$wiki_name."(".$person->id.")<br />";
        }
    
    }
    public function dbpedia() 
    {
        //http://dbpedia.org/sparql?default-graph-uri=http%3A%2F%2Fdbpedia.org&query=DESCRIBE%20%3Chttp%3A%2F%2Fdbpedia.org%2Fresource%2FSusan_Haack%3E&format=text%2Fcsv
        $people = Person::where('id', '<', 1000)->get();
        foreach($people as $person) {
            $wiki_name = $person->wikipedia_canonical_path;
            $first_letter = substr($person->wikipedia_canonical_path, 0, 1);
            $url = "http://dbpedia.org/sparql?default-graph-uri=http%3A%2F%2Fdbpedia.org&query=DESCRIBE%20%3Chttp%3A%2F%2Fdbpedia.org%2Fresource%2F".$wiki_name."%3E&format=text%2Fcsv";
            $result = file_get_contents($url);
            Storage::disk('local')->put("/philosophers/".$first_letter."/".$wiki_name.".csv", $result);
            echo "Retrieved ".$wiki_name."(".$person->id.")<br />";
        }
    }
    public function readCsv() {
        $people = Person::where('id', '>=', 1)->get();
        foreach($people as $person) {
            $wiki_name = $person->wikipedia_canonical_path;
            $first_letter = substr($person->wikipedia_canonical_path, 0, 1);
            $filename = "/philosophers/".$first_letter."/".$wiki_name.".csv";
            $csv = Storage::get($filename);
            $data = str_getcsv($csv, "\n"); //parse the rows 
            echo $person->name."<br />";
            foreach($data as &$row) {
                $row = str_getcsv($row, ","); 
                //parse the items in rows
                if(array_key_exists(1, $row) && ($row[1] == "http://dbpedia.org/ontology/author" ||
                    $row[1] =="http://dbpedia.org/property/authors")) {
                    echo "<pre>";
                    print_r($row[0]);
                    echo "</pre>";
                    $book = Book::updateOrCreate(['dbpedia_url'=>$row[0]]);
                    $person->books()->syncWithoutDetaching($book->id);
                }   
            }
        }
    }
    public function books() {
        $books = Book::where('id', '>=', 1)->get();
        foreach($books as $book) {
            $url = $book->dbpedia_url.".json";
            $url = str_replace ("http://dbpedia.org/resource/", "http://dbpedia.org/data/", $url);
            $curl = new Curl();
            $request = $curl->get($url);
            $book->dbpedia_json = json_encode($request);;
            $book->save();      
        }
    }
    public function book() {
        $books = Book::where('id', '>=', 1)->get();
        foreach($books as $book) {
            $string = $book->dbpedia_json;
            $arrJson  = json_decode($string);
            $title = '';
            $category = '';
            $desc = '';
            $id = $book->id;
            foreach($arrJson as $key=>$value){
                foreach($value as $keyval=>$val){
                    //echo $keyval."<br>";
                    if($keyval === "http://www.w3.org/2000/01/rdf-schema#label") {                        
                        $title = $this->getEnglish($val);
                    }
                    if($keyval === "http://xmlns.com/foaf/0.1/name" && $title == '') {
                        $title = $this->getEnglish($val);
                    }
                    if($keyval === "http://dbpedia.org/property/title" && $title =='') {
                        $title = $this->getEnglish($val);
                    }
                    if($keyval === "http://dbpedia.org/ontology/nonFictionSubject") {
                        $category = $this->getCategory($val);
                    }
                    if($keyval === "http://dbpedia.org/property/genre" && $category == '') {
                        $category = $this->getCategory($val);
                    }
                    if($keyval === "http://www.w3.org/2000/01/rdf-schema#comment") {
                        $desc = $this->getEnglish($val);
                    }
                }
            }  
            echo "<h1>".$id."</h1>";
            if($title == '') {
                echo "<b>No Title</b><br />";
            } else {
                echo "<p>".$title."</p>";
            }
            if($category == '') {
                echo "<b>No category</b><br />";
            } else {
                echo "<p>".$category."</p>";
            }  
            //$book->title = $title;
            //$book->description = $desc;
            //$book->save();
        }
    }
    public function getCategory($val) {
        return $val;
    }
    public function getEnglish($thing) {
        $result = '';
        foreach($thing as $language) {
            if(property_exists($language, 'lang') && $language->lang=="en") {
                $result = $language->value;
            } 
        }
        return $result;
    }   
    public function videos() {
        $videos = array();
        /*
        $videos[] = array("likes"=>270, "published_date" =>"2018-03-31 11:42:15", "views"=>27226, 
                            "dislikes"=>24, "comments"=>1);
        $now = Carbon::now();
        $published = Carbon::parse($videos[0]['published_date']);
        $days = $published->diffInDays($now);
        $seconds = $published->diffInSeconds($now);
        */
        $vids = Media::orderBy('views', 'asc')
                        ->orderBy('likes', 'desc')
                        ->get();
        foreach($vids as $video) {
            //echo $video->title." (".$video->views.") vs (".$video->likes.")<br />";
            $published = Carbon::parse($video->published_date);
            
            $now = Carbon::now();
            $days = $published->diffInDays($now);
            if($days === 0) {
                $days = 1;
            }
            $av = $video['views']/$days;
            $score = ($av+$video->likes)/$av;
            $videos[] = array('title'=>$video->title, 'score'=>$score, 'id'=>$video->source_id);
        }
        //print_r($videos);
        usort($videos, function($a, $b) {
            return $a['score'] <=> $b['score'];
        });
    
        foreach($videos as $v) {
            echo $v['title']." ".$v['id']."(".$v['score'].")<br />";
        }
    }
    public function tree()
    {
        $result = array();
        $people = Person::take(1)->get();
        $found = array();
        $xml = new \SimpleXMLElement('<philosophers></philosophers>');
        foreach($people as $person){
            //$all = $this->recurse($person, $result,$found);
            $root = $xml->addChild('philosopher');
            $root->addChild('name', $person->name);
            $result = $this->buildXML($person, $root);
        }
        Header('Content-type: text/xml');
        echo $xml->asXML();
    }
    public function buildXML($person, $xml, $x=0, &$found=array()) {
        if($x > 50) { 
            Header('Content-type: text/xml');
            echo $xml->asXML();
            die; 
        }
        foreach($person->influences as $influence) {
            if($influence->available) {
                if(!in_array($influence->name, $found))
                {
                    $found[] = $influence->name;
                    $qid = $influence->qid;
                    $child = Person::where('qid','=', $qid)->firstOrFail();
                    $inf = $xml->addChild('influence');
                    $inf->addChild('name', $child->name);
                    $this->buildXML($child, $xml, $x++, $found);
                } else {
                    continue;
                }
            }
        }
        return $xml;
    }
}
