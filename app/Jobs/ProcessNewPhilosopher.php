<?php

namespace App\Jobs;

use App\Person;
use App\Requests\Wikipedia;
use App\Jobs\ProcessWikidataPhilosopher;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessNewPhilosopher implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
        //
        $wiki = new Wikipedia($this->philosopher->wikipedia_canonical_path);
        $result = $wiki->getDataFromWikipediaAPI();
        $result = json_decode($result, TRUE);
        $this->philosopher->applyDataFromWikipedia($result);
        ProcessWikidataPhilosopher::dispatch($this->philosopher);
    }
}
