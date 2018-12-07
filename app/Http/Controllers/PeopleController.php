<?php

namespace App\Http\Controllers;

set_time_limit(1000);

use Illuminate\Http\Request;
use App\Person;
use App\Media;
use App\Category;
use App\Book;
use App\Jobs\ProcessNewPhilosopher;
use App\Jobs\ProcessGeoLookup;
use App\Jobs\ProcessCategories;
use Spatie\SchemaOrg\Schema;


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
            ->paginate(60);
        return view('people', ['people' => $people]); 
    }
    public function category($category=null)
    {
        $people = Person::withCount('influences')
            ->withCount('media')
            ->whereHas('categories', function($q) use ($category){
                $q->where('name', $category);
            })
            //->orderBy('year', 'asc')
            ->orderBy('linked_articles', 'desc')
            //->orderBy('influences_count', 'desc')
            ->paginate(60);
        return view('people', ['people' => $people]); 
    }
    public function categories()
    {
        $categories = Category::withCount('people')
            ->orderBy('people_count', 'desc')
            ->paginate(60);
        return view('categories', ['categories' => $categories]); 
    }
    public function topic($topic=null) {
        $books = Book::with('people')
                    ->whereHas('topics', function($q) use ($topic){
                        $q->where('name', $topic)->where('type', '=', 'topic');
                    })
                    ->paginate(60);

        return view('books', ['books' => $books, 'topic'=>$topic]); 
    }
    public function search(Request $request) 
    {
        $search_term = $request->input('search_term');
        $people = Person::withCount('influences')
                ->withCount('media')
                ->where('name', 'like', '%'.$search_term.'%')
                ->paginate(60);
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
        ->paginate(60);
        return view('people', ['people' => $people]);
    }
    public function view($id)
    {
        $person = Person::with(['media' => function ($q) {
                $q->orderBy('ranking', 'desc');
            }])
            ->where('qid','=', $id)->firstOrFail();
        
        $people = 0;
        if($person->death_year && $person->year)
        {
            $people = Person::where(function($query) use ($person) {
                $query->where('year', '<=', $person->death_year);
                $query->where('death_year', '>=', $person->year);
            })->count();
        }
        $person->imdb = $person->getFromWikiData("IMDb ID");
        $person->viafId = $person->getFromWikiData("VIAF ID");
        $person->locaId = $person->getFromWikiData("Library of Congress authority ID");
        $person->gutenbergId = $person->getFromWikiData("Project Gutenberg author ID");
        $schemaPerson = Schema::person()
            ->name($person->name)
            ->gender($person->sex)
            ->jobTitle('Philosopher')
            ->image($person->image)
            ->sameAs($person->wikipedia_canonical_url)
            ->birthDate($person->date_of_birth)
            ->deathDate($person->date_of_death);
        $permissions = false;
        if (App::environment('local')) {
            $permissions = true;
        }
            
            
        return view('person', ['person' => $person, 'people'=>$people, 
                            'schema'=>$schemaPerson, 'title'=>$person->name,
                            'permissions'=>$permissions]);
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
    public function process($event = null)
    {
        switch($event) {
            case "images":
                $people = Person::whereNull('image')->get();
                foreach($people as $philosopher)
                {
                    ProcessNewPhilosopher::dispatch($philosopher);
                }
            break;
            case "geo":
                //$people = Person::whereNull('place_of_birth_lng')->get();
                $people = Person::take(1)->where('id', '=', 825)->get();
                foreach($people as $philosopher)
                {
                    ProcessGeoLookup::dispatch($philosopher);
                }
            break;
            case "category":
                //$people = Person::take(1000)->where('id', '>', 784)->get();
                $people = Person::take(1)->where('id', '=', 825)->get();
                foreach($people as $philosopher)
                {
                    $philosopher->findCategories();
                    //ProcessCategories::dispatch($philosopher);                    
                }
                break;
            default:
                $people = Person::whereNull('event')->get();
                foreach($people as $philosopher)
                {
                    ProcessNewPhilosopher::dispatch($philosopher);
                }
            break;
        }
    }
}
