<?php namespace App\Requests;
use Curl\Curl;
use PHPHtmlParser\Dom;


class Wikipedia {
    
    public $total = 0;
    public $name;
    public $namespace;

    function  __construct($name) {
        $this->name = $name;
        //$this->namespace = $namespace;    
    }
    public function getWhatLinksHere() {
        $curl = new Curl();
        //first page
        $curl->get('https://en.wikipedia.org/w/index.php?title=Special%3AWhatLinksHere&limit=500&target='.$this->name.'&namespace=0');
        if ($curl->error) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
        } else {
            $html = $curl->response;
            $this->parseNextLinks($html);
        }
    }
    public function getNextBatch($url) {
        $curl = new Curl();
        $curl->get($url);
        if ($curl->error) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
        } else {
            $html = $curl->response;
            $this->parseNextLinks($html);
        }
    }
    public function parseNextLinks($html) {
        $xml = simplexml_load_string($html);
        $search = $xml->xpath('//a[contains(text(), "Next 500") or contains(text(), "next 500")]');
        if(count($search) !== 0 && $search !== false)
        {
            $item = $search[0];
            $attributes = $item->attributes();
            $this->total += 500;
            $this->getNextBatch('https://en.wikipedia.org'.$attributes['href']);
        } else {
            $dom = new Dom;
            $dom->load($html);
            $list = $dom->find('#mw-whatlinkshere-list > li');
            $this->total += count($list);
        }
    }
    public function getTotalLinkedArticles() { return $this->total; }
}