<?php

namespace App\Jobs;

use App\Person;
use App\Requests\Wikipedia;
use App\Requests\Youtube;
use Illuminate\Support\Facades\Storage;
use App\Jobs\ProcessWikidataPhilosopher;
use App\Jobs\ProcessGeoLookup;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessNewPhilosopher implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 2;
    protected $philosopher;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Person $philosopher)
    {
        //
        $this->philosopher = $philosopher;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try
        {
            $wiki = new Wikipedia($this->philosopher->wikipedia_canonical_path);
            echo $this->philosopher->wikipedia_canonical_path."<br />";
            $result = $wiki->getDataFromWikipediaAPI();
            $result = json_decode($result, TRUE);
            $this->philosopher->applyDataFromWikipedia($result);
            $wiki->getWhatLinksHere($this->philosopher->name);
            $wiki_name = $this->philosopher->wikipedia_canonical_path;
            $first_letter = substr($this->philosopher->wikipedia_canonical_path, 0, 1);
            $url = "https://en.wikipedia.org/w/index.php?action=raw&title=".$wiki_name;
            $result = file_get_contents($url);
            Storage::disk('local')->put("/philosophers/".$first_letter."/".$wiki_name.".txt", $result);
            $this->philosopher->linked_articles = $wiki->getTotalLinkedArticles();
            $this->philosopher->event = 2;
            $this->philosopher->save();
            ProcessWikidataPhilosopher::dispatch($this->philosopher);
            $this->philosopher->findCategories();
            $youtube = new Youtube($this->philosopher);
            $youtube->collectVideos();
            ProcessGeoLookup::dispatch($this->philosopher);
            echo $this->philosopher->id;
        } catch(\Exception $e) 
        {
            Log::error("Processing: ".$this->philosopher->wikipedia_canonical_path.
            " File: ".$e->getFile()." Line: ".$e->getLine().
            " Error: ". $e->getMessage()." ENDS");
        }
        
    }
}
