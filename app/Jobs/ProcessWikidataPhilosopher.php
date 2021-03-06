<?php

namespace App\Jobs;



use App\Person;
use App\Requests\Wikidata;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessWikidataPhilosopher implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $philosopher;
    public $tries = 2;
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
        //
        $wikidata = new Wikidata();
        $result = $wikidata->getProperties($this->philosopher->qid);
        $this->philosopher->applyDataFromWikidata($result);
        $influences = $wikidata->getInfluences($this->philosopher->qid);
        $this->philosopher->applyInfluencesFromWikiData($influences);

    }
}
