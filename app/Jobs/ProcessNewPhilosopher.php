<?php

namespace App\Jobs;

use App\Person;
use App\Requests\Wikipedia;
use App\Requests\Youtube;
use App\Jobs\ProcessWikidataPhilosopher;
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
            $result = $wiki->getDataFromWikipediaAPI();
            $result = json_decode($result, TRUE);
            $this->philosopher->applyDataFromWikipedia($result);
            $wiki->getWhatLinksHere($this->philosopher->name);
            $this->philosopher->linked_articles = $wiki->getTotalLinkedArticles();
            $this->philosopher->event = 2;
            $this->philosopher->save();
            ProcessWikidataPhilosopher::dispatch($this->philosopher);
            $youtube = new Youtube($this->philosopher);
            $youtube->collectVideos();
        } catch(\Exception $e) 
        {
            Log::error("File: ".$e->getFile()." Line: ".$e->getLine()." Error: ". $e->getMessage()." ENDS");
        }
        
    }
}
