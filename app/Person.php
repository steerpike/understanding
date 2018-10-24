<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Influence;

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
    public function applyDataFromWikidata($data) {
        $sex = $data['sex or gender'] ?? null;
        $dob = $data['date of birth'] ?? null;
        if($dob)
        {
            if(is_array($dob)) {
                $dob = $dob[0];
            }
            $birth_dates = $this->processDate($dob);
            $this->year = $birth_dates['year'];
            $this->month = $birth_dates['month'];
            $this->day = $birth_dates['day'];
            $this->date_of_birth = $birth_dates['date'];
        }
        if(array_key_exists('date of death', $data)) {
            $dod = $data['date of death'];
            if(is_array($dod)) {
                $dod = $dod[0];
            }
            $death_dates = $this->processDate($dod);
            $this->death_year = $death_dates['year'];
            $this->death_month = $death_dates['month'];
            $this->death_day = $death_dates['day'];
            $this->date_of_death = $death_dates['date'];
        }
        $this->image = $data['image'] ?? null;
        $this->sex = $sex;
        $this->wikidata_response = json_encode($data);
        $this->save();
    }
    public function applyInfluencesFromWikiData($data)
    {
        $place = $data['birth_place'] ?? "";
        $country = $data['birth_country'] ?? "";
        $this->place_of_birth = $place.", ".$country;
        if(array_key_exists('influences', $data)) 
        {
            foreach($data['influences'] as $key=>$val)
            {
                $model_influence = Influence::updateOrCreate(['qid'=>$key],['name'=>$val]);
                echo $key." ".$val." ID:".$model_influence->id."<br />";
                $this->influences()->syncWithoutDetaching($model_influence->id);
            }
        }
        $this->save();
    }
    public function processDate($date)
    {
        $era = "CE";
        $result = array();
        if($date[0] == "-")
        {
            $era = "BCE";
            $date = ltrim($date, '-');
        }
        $start = explode('T',$date);
        $parts = explode('-', $start[0]);
        if($era == "BCE") 
        {
            $parts[0] = '-'.$parts[0];
            $date = "-".$date;
        }
        if(array_key_exists(0, $parts) && array_key_exists(1, $parts) && array_key_exists(2, $parts))
        {
            $result['year'] = $parts[0];
            $result['month'] = $parts[1];
            $result['day'] = $parts[2];
        } else {
            echo "Couldn't split date of ".$this->name."<br />";
        }
        $result['date'] = $date;

        return $result;
    }
}
