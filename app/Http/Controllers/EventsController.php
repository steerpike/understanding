<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests\Wikipedia;
use App\Requests\Wikidata;
use App\Person;

class EventsController extends Controller
{
    //
    public function events($event) 
    {
      switch($event) {
        case 1:
          $people = Person::where('event', '=', 1)->get();
          foreach($people as $person) {
            $wiki = new Wikipedia($person->name);
            $result = $wiki->getDataFromWikipediaAPI();
            if($result){
              $result = json_decode($result, TRUE);
              $person->applyDataFromWikipedia($result);
            }
          }
          break;
        case 2:
          $people = Person::where('event', '=', 2)->get();
          foreach($people as $person) {
            $wikidata = new Wikidata();
            $result = $wikidata->getProperties($person->qid);
            $sex = $result['sex or gender'][0];
            $person->sex = $sex;
            $person->event = 3;
            $person->wikidata_response = json_encode($result);
            $person->save();      
          }
          break;
        case 3:

          break;
          default;
            break;
      }
      /*
      
      */
    }
}