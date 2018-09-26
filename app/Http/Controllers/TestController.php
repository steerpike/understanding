<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Media;
use App\Requests\Wikipedia;
use App\Person;

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
