<?php namespace App\Requests;

use Curl\Curl;
use PHPHtmlParser\Dom;


class Wikidata {
        
    public function getInfluences($qid)
    {
        $url = "https://query.wikidata.org/sparql?format=json&".
        "query=SELECT%20DISTINCT%20%3Fphilosophers%20%3FphilosophersLabel".
        "%20%3Finfluenced_by%20%3Finfluenced_byLabel%20%3Fbirth_countryLabel".
        "%20%3Fbirth_placeLabel%20%3Fphilosophers_birth_date%20WHERE%20%7B%0A%20%20VALUES".
        "%20%3Fphilosophers%20%7B%0A%20%20%20%20wd%3A".$qid."%0A%20%20%20%20%7D%0A%20%20%3F".
        "philosophers%20wdt%3AP569%20%3Fphilosophers_birth_date.%0A%20%20%3Fphilosophers".
        "%20wdt%3AP19%20%3Fbirth_place.%0A%20%20%3Fphilosophers%20wdt%3AP19%2Fwdt%3AP17%20%3F".
        "birth_country.%0A%20%20%3Finfluenced_by%20wdt%3AP737%20?philosophers.%0A%20%20SERVICE%20".
        "wikibase%3Alabel%20%7B%20bd%3AserviceParam%20wikibase%3Alanguage%20%22en%22.%20%7D%0A%7D%0A".
        "ORDER%20BY%20DESC(%3Fphilosophers_birth_date)";
        $curl = new Curl();
        $request = $curl->get($url);
        $answers = array();
        foreach($request->results->bindings as $influence) {
            $tmp = explode('/',$influence->influenced_by->value);
            $inf_qid = end($tmp);
            $answers['influences'][$inf_qid] = $influence->influenced_byLabel->value;
            $answers['birth_place'] = $influence->birth_placeLabel->value;
            $answers['birth_country'] = $influence->birth_countryLabel->value;
        }
        dd($answers);
        return $answers;
    }
    public function getProperties($qid)
    {
        $url = "https://query.wikidata.org/sparql?format=json&query=SELECT%20DISTINCT%20%3FwdLabel".
        "%20%3Fps_Label%20%3FwdpqLabel%20%3Fpq_Label%20WHERE%20%7B%0A%20%20VALUES%20(%3Fcompany)".
        "%20%7B%0A%20%20%20%20(wd%3A".$qid.")%0A%20%20%7D%0A%20%20%3Fcompany%20%3Fp%20%3Fstatement.".
        "%0A%20%20%3Fstatement%20%3Fps%20%3Fps_.%0A%20%20%3Fwd%20wikibase%3Aclaim%20%3Fp.%0A%20%20%3F".
        "wd%20wikibase%3AstatementProperty%20%3Fps.%0A%0A%20%20OPTIONAL%20%7B%0A%20%20%20%20%3F".
        "statement%20%3Fpq%20%3Fpq_.%0A%20%20%20%20%3Fwdpq%20wikibase%3Aqualifier%20%3Fpq.%0A%20%20%".
        "7D%0A%20%20SERVICE%20wikibase%3Alabel%20%7B%20bd%3AserviceParam%20wikibase%3Alanguage%20%22en".
        "%22.%20%7D%0A%7D%0AORDER%20BY%20%3Fwd%20%3Fstatement%20%3Fps_".
        "statement%20%3Fps_";
        $result = file_get_contents($url);
        $array = json_decode($result, TRUE);
        $answers = array();
        foreach($array['results']['bindings'] as $property) {
            $prop = $property['wdLabel']['value'];
            $value = $property['ps_Label']['value'];
            if(!isset($answers[$prop])) {
                $answers[$prop] = array();
            }
            $answers[$prop][] = $value;
        }
        foreach($answers as $key=>$value) {
            if( is_array( $value ) && count( $value ) == 1 && isset( $value[0] ))
                $answers[$key] = $value[0]; 
        }
        return $answers;
    }
}

/*
SPARQL query to get all props/labels for an entity including influenced_by:

SELECT DISTINCT ?wdLabel ?ps_Label ?wdpqLabel ?pq_Label ?influence_Label WHERE {
  VALUES (?company) {
    (wd:Q868)
  }
  ?company ?p ?statement.
  ?statement ?ps ?ps_.
  ?wd wikibase:claim ?p.
  ?wd wikibase:statementProperty ?ps.
  ?influence wdt:P737 ?company.

  OPTIONAL {
    ?statement ?pq ?pq_.
    ?wdpq wikibase:qualifier ?pq.
  }
  SERVICE wikibase:label { bd:serviceParam wikibase:language "en". }
}
ORDER BY ?wd ?statement ?ps_

*/