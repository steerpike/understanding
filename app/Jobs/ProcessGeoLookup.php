<?php

namespace App\Jobs;

use Curl\Curl;
use App\Person;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessGeoLookup implements ShouldQueue
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
        //KEY: 3ca0450741ee45378c92385432a757a5
        if($this->philosopher->place_of_birth != NULL &&
            $this->philosopher->place_of_birth != ",")
        {
            try {           
                $curl = new Curl();
                $url = "https://api.opencagedata.com/geocode/v1/json?q=".$this->philosopher->place_of_birth."&key=3ca0450741ee45378c92385432a757a5";
                $request = $curl->get($url);
                if ($request && $request->total_results > 0) {
                    $first = $request->results[0];
                    $this->philosopher->place_of_birth_lng = $first->geometry->lng;
                    $this->philosopher->place_of_birth_lat = $first->geometry->lat;
                    $this->philosopher->save();
                }
            } catch(\Exception $e) 
            {
                Log::error("GeoLookup: ".$this->philosopher->wikipedia_canonical_path.
                " File: ".$e->getFile()." Line: ".$e->getLine().
                " Error: ". $e->getMessage()." ENDS");
            }
        }
    }
}
