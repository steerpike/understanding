<?php

namespace App\Http\Controllers;

set_time_limit(1000);

use Illuminate\Http\Request;
use App\Person;
use App\Media;
use App\Jobs\ProcessNewPhilosopher;

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
    public function search(Request $request) 
    {
        $search_term = $request->input('search_term');
        $people = Person::withCount('influences')
                ->withCount('media')
                ->where('name', 'like', '%'.$search_term.'%')
                ->paginate(20);
        return view('people', ['people' => $people]);

    }
    public function between($start, $end) 
    {
        $data = array();
        $data['start'] = $start;
        $data['end'] = $end;
        $people = Person::where(function($query) use ($data) {
            $query->where('year', '<=', $data['end']);
            $query->where('death_year', '>=', $data['start']);
        })
        ->withCount('influences')
        ->withCount('media')
        ->paginate(20);
        return view('people', ['people' => $people]);
    }
    public function view($qid)
    {
        $person = Person::with(['media' => function ($q) {
                $q->orderBy('ranking', 'desc');
            }])->where('qid','=', $qid)->firstOrFail();
        $people = 0;
        if($person->death_year && $person->year)
        {
            $people = Person::where(function($query) use ($person) {
                $query->where('year', '<=', $person->death_year);
                $query->where('death_year', '>=', $person->year);
            })->count();
        }
        $person->imdb = $person->getFromWikiData("IMDb ID");
        return view('person', ['person' => $person, 'people'=>$people]);
    }
    public function media()
    {
        $media = Media::orderBy('ranking', 'desc')->get();
        return view('media', ['videos' => $media]);
    }
    public function timeline()
    {
        $people = array();
        return view('timeline', ['people' => $people]);
    }
    public function create($name) 
    {
        //Create new Philosopher here
        $philosopher = Person::updateOrCreate(['wikipedia_canonical_path'=>$name]);
        ProcessNewPhilosopher::dispatch($philosopher);
        //Trigger job queues to get data for newly created Philosopher
    }
    public function process()
    {
        $people = Person::whereNull('event')->get();
        echo count($people);
        foreach($people as $philosopher)
        {
            ProcessNewPhilosopher::dispatch($philosopher);
        }
    }
}
