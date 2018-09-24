<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Media;

class PeopleController extends Controller
{
    //
    public function list($gender=null)
    {
        $people = Person::withCount('influences')
            ->withCount('media')
            ->gender($gender)
            //->orderBy('year', 'asc')
            ->orderBy('linked_articles', 'desc')
            //->orderBy('influences_count', 'desc')
            ->paginate(20);
        return view('people', ['people' => $people]); 
    }
    public function view($qid)
    {
        $person = Person::where('qid','=', $qid)->firstOrFail();
        return view('person', ['person' => $person]);
    }
    public function media()
    {
        $media = Media::all();
        return view('media', ['videos' => $media]);
    }
}
