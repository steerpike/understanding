<?php

namespace App\Jobs;

use App\Person;
use Illuminate\Support\Facades\Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Parsers\WikiParser;

class ProcessCategories implements ShouldQueue
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
            $wiki_name = $this->philosopher->wikipedia_canonical_path;
            $first_letter = substr($this->philosopher->wikipedia_canonical_path, 0, 1);
            $filename = "/philosophers/".$first_letter."/".$wiki_name.".txt";
            $wikipedia_syntax_parser = new WikiParser($raw_wikipedia_syntax);
            $parsed_wiki_syntax = $wikipedia_syntax_parser->parse();
            echo "<h1>".$this->philosopher->name." (".$this->philosopher->id.") </h1><br /> ";
            if(array_key_exists('categories', $parsed_wiki_syntax)) {
                echo "<pre>";
                print_r($parsed_wiki_syntax["categories"]);
                echo "</pre>";
            } else {
                echo "No categories.<br />";
            }
        } catch(\Exception $e) 
        {
            Log::error("Categories: ".$this->philosopher->wikipedia_canonical_path.
            " File: ".$e->getFile()." Line: ".$e->getLine().
            " Error: ". $e->getMessage()." ENDS");
        }
    }


    /*
    public function handle()
    {
        $wiki_name = $this->philosopher->wikipedia_canonical_path;
        $first_letter = substr($this->philosopher->wikipedia_canonical_path, 0, 1);
        $filename = "/philosophers/".$first_letter."/".$wiki_name.".txt";
        
        echo "<h1>".$this->philosopher->name." (".$this->philosopher->id.") </h1><br /> ";
        foreach(explode(PHP_EOL, $content) as $line) {
            /* Fields doesn't offer much and data needs cleaning. Mostly mixed skillsets
            like scientist/philosophers
            $fields_line = preg_replace('/<ref[\s\S]+?\/ref>/', '', $line);
            $fields_line = $this->getLine(strip_tags($line), "fields");
            if($fields_line) {
                echo "Fields:<br/>";
                echo $fields_line."<br />";
                $parts = explode('=', $fields_line);
                $this->extractContent($parts[1]);
            }
            */
        /*
            $interests_line = preg_replace('/<ref[\s\S]+?\/ref>/', '', $line);
            $interests_line = $this->getLine(strip_tags($line), "main_interests");
            if($interests_line) {
                echo "Interests:<br/>";
                echo $interests_line."<br />";
                $parts = explode('=', $interests_line);
                $this->extractContent($parts[1]);
            }
            /*
            $philosophy_line = preg_replace('/<ref[\s\S]+?\/ref>/', '', $line);
            $philosophy_line = $this->getLine(strip_tags($line), "philosophy");
            if($philosophy_line) {
                echo "Philosophy:<br/>";
                echo $philosophy_line."<br />";
                $parts = explode('=', $philosophy_line);
                $this->extractContent($parts[1]);
            }
            $era_line = $this->getLine(strip_tags($line), "era");
            if($era_line) {
                echo "Era:<br/>";
                $parts = explode('=', $era_line);
                $this->extractContent($parts[1]);
            }
            $region_line = $this->getLine(strip_tags($line), "region");
            if($region_line) {
                echo "Region:<br/>";
                $parts = explode('=', $region_line);
                $this->extractContent($parts[1]);
            }
            $school = preg_replace('/<ref[\s\S]+?\/ref>/', '', $line);
            $school = $this->getLine(strip_tags($school), "school_tradition");
            if($school) {
                echo "School:<br/>";
                //$parts = explode('=', $school);
                $this->extractContent($school);
            }
            */
        /*
        }
    }
    public function getLine($line, $what) {
        $start = substr($line, 0, 20);
        if (strpos($start, ''.$what.' ') !== false && 
            strpos($start, '=') !== false &&
            strpos($start, '|') !== false) {
            return $line;
        }
        return false;
    }
    public function extractContent($line) {
        $line = str_replace("{{hlist", "", $line);
        $line = str_replace("}}", "", $line);
        $parts = explode('[[', $line);
        $parts = array_map('trim', $parts);
        $parts = array_filter($parts);
        foreach($parts as $rawCategory) {
            $split = explode('|', $rawCategory);
            if(count($split) > 1) {
                $rawCategory = $split[0];
            }
            $chars = array("]]",",", ")", "(", ":",
                        "{{nowrap", "{{floruit", "{{refn", "/",
                        "{{cite book", "''", "·",
                        "{{cite web", "{{");
            $rawCategory = str_replace($chars, "", $rawCategory);
            $rawCategory = ucfirst($rawCategory);
            echo "<pre>";
            print_r($rawCategory);
            echo "</pre>";
        }
    }
    */
}
