<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $guarded = [];
    public function influences()
    {
        return $this->belongsToMany('App\Influence')->whereNull('influences.deleted_at');
    }
    public function media()
    {
        return $this->belongsToMany('App\Media')->whereNull('media.deleted_at');
    }
    public function scopeGender($query, $gender=null)
    {
        if($gender != null){
            return $query->where('sex', '=', $gender);
        }
        return $query;
    }
    public function getFromWikiData($field)
    {
        $array = json_decode($this->wikidata_response, TRUE);
        if(array_key_exists($field, $array)){
            return $array[$field][0];
        } 
        return 0;
    }
    public function applyDataFromWikipedia($data)
    {
        $key = key($data['query']['pages']);
        $wikipedia_canonical_url = $data['query']['pages'][$key]['canonicalurl'];
        $wikipedia_canonical_path = @end(explode('/',$wikipedia_canonical_url));
        $wikipedia_path = @end(explode('https://en.wikipedia.org',$wikipedia_canonical_url));
        $description = '';
        $redirected_name = $this->name;
		if(array_key_exists('redirects', $data['query'])) {
			$redirected_name = $data['query']['redirects'][0]['to'];
		}
        if(array_key_exists('extract', $data['query']['pages'][$key])) {
            $description = $data['query']['pages'][$key]['extract'];
        }
        $intro = $data['query']['pages'][$key]['terms']['description'][0];
        $qid = $data['query']['pages'][$key]['pageprops']['wikibase_item'];
        $wikiId = $data['query']['pages'][$key]['pageid'];
        $this->qid = $qid;
        $this->wikipedia_id = $wikiId;
		$this->redirected_name = $redirected_name;
		$this->wikipedia_canonical_url = $wikipedia_canonical_url;
        $this->wikipedia_canonical_path = $wikipedia_canonical_path;
        $this->wikipedia_path = $wikipedia_path;
        $this->intro = $intro;
        $this->name = $data['query']['pages'][$key]['title'];
        $this->event = 2;
		$this->description = $description;
        $this->save();
    }
}
