<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\Requests\Wikipedia;
use App\Person;
set_time_limit(1000);
ini_set('memory_limit', '-1'); 

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
        $media = Media::where('description', 'like', '%song%')
                        ->orWhere('description', 'like', '%lyric%')
                        ->orWhere('description', 'like', '%band%')
                        ->whereNull('deleted_at')
                        ->get();
        foreach($media as $video) {
            echo "This video: ".$video->id.": ".$video->title."<br />".
            $video->description."<br />";
            $video->deleted_at = date("Y-m-d H:i:s");
            $video->save();
        }
    }
}
