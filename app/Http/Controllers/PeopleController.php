<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PeopleController extends Controller
{
    //
    public function list()
    {
        $people = Person::withCount('influences')
            ->withCount('media')
            //->orderBy('year', 'asc')
            ->orderBy('influences_count', 'desc')
            ->paginate(20);
        return view('people', ['people' => $people]); 
    }
    public function view($qid)
    {
        $person = Person::where('qid','=', $qid)->firstOrFail();
        return view('person', ['person' => $person]);
    }
}
