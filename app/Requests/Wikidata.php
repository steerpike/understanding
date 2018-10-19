<?php namespace App\Requests;

use Curl\Curl;
use PHPHtmlParser\Dom;


class Wikidata {
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
        echo "<pre>";
        print_r(json_encode($answers));
        echo "</pre>";
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