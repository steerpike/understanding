<?php namespace App\Requests;

use Google_Client;
use Google_Service_YouTube;
use App\Person;
use App\Media;
use Carbon\Carbon;

class Youtube {

    protected $philosopher;

    public function __construct(Person $philosopher)
    {
        //
        $this->philosopher = $philosopher;
    }
    public function collectVideos()
    {
        $DEVELOPER_KEY = 'AIzaSyCUi1fmVO1le4N5bhtYoS-fbTkKczzaaHM';
        $client = new Google_Client();
        $client->setDeveloperKey($DEVELOPER_KEY);
        $youtube = new Google_Service_YouTube($client);
        $searchResponse = $youtube->search->listSearch('id,snippet', array(
            'q' => $this->philosopher->name." philosophy",
            'maxResults' => 10,
            ));
        //$service->videos->listVideos
        echo "<h1>".$this->philosopher->name."</h1><br/>";

        $ids = array();
        $pdesc = strip_tags($this->philosopher->description);
        $pdesc = trim( preg_replace( "/[^0-9a-z]+/i", " ", $pdesc ) );
        $names = explode(" ", strtolower($this->philosopher->name));
        $pdesc_stripped = $this->removeCommonWords(strtolower($pdesc), $names);
        $always_words = array("philosophy", "philosopher","philosophise", 
                            "philosophize", "philosophical","lecture", "lecturer",
                        "morals", "ethics", "metaphysics", "linguistics",
                        "sophism", "sophist", "ideas");
        $pdesc_array = explode(" ", $pdesc_stripped);
        $pdesc_array = array_merge($pdesc_array, $always_words);
        foreach($searchResponse->items as $item)
        {
            $youtube_id = $item->id->videoId;
            $title = $item->snippet->title;
            $desc = $item->snippet->description;
            $desc = trim( preg_replace( "/[^0-9a-z]+/i", " ", $desc ) );
            $desc = $desc." ".$title;
            $desc_stripped = $this->removeCommonWords(strtolower($desc), $names);
            $desc_array = explode(" ", $desc_stripped);
            $common = array_intersect($desc_array, $pdesc_array);
            $common = array_filter($common);
            $thumbnail = 0;
            if(count($common)) {
                $ids[] = $youtube_id;
            }
        }
        if(count($ids)) {
            $stringids = implode(",",$ids);
            $params = array('id'=>$stringids);
            $params = array_filter($params);
            $details = $youtube->videos->listVideos('snippet,contentDetails,statistics', $params);
            foreach($details->items as $video)
            {
                $id = $video->id;
                $title = $video->snippet->title;
                $description = $video->snippet->description;
                $duration = $video->contentDetails->duration;
                $dislikes = $video->statistics->dislikeCount;
                $likes = $video->statistics->likeCount;
                $views = $video->statistics->viewCount;
                $comments = $video->statistics->commentCount;
                $published = $item->snippet->publishedAt;
                $published_at = date('Y-m-d H:i:s', strtotime($published));
                $values = array('id'=>$id, 'title'=>$title, 'description'=>$description,
                                'duration'=>$duration,'dislikes'=>$dislikes,'likes'=>$likes,
                            'views'=>$views,'comments'=>$comments,'published'=>$published_at);
                $values['score'] = $this->getScore($values);
                $score = round($values['score'], 8);
                if(property_exists($video->snippet->thumbnails, 'high'))
                {
                    $thumbnail = $video->snippet->thumbnails->high->url;
                } 
                $model_media = Media::updateOrCreate(['source_id'=>$id],['title'=>$title, 
                    'description'=>$description, 'duration'=>$duration, 'likes'=>$likes, 
                    'dislikes'=>$dislikes, 'views'=>$views,'comments'=>$comments,
                    'source'=>'youtube', 'thumbnail_url'=>$thumbnail, 
                    'published_at'=>$published_at, 'ranking'=>$score]);
                    $this->philosopher->media()->syncWithoutDetaching($model_media->id);
            }
        }
        
    }
    function removeCommonWords($input, $names = null) 
    {
        $commonWords = array('a','able','about','above','abroad','according','accordingly','across','actually','adj','after','afterwards','again','against','ago','ahead','ain\'t','all','allow','allows','almost','alone','along','alongside','already','also','although','always','am','amid','amidst','among','amongst','an','and','another','any','anybody','anyhow','anyone','anything','anyway','anyways','anywhere','apart','appear','appreciate','appropriate','are','aren\'t','around','as','a\'s','aside','ask','asking','associated','at','available','away','awfully','b','back','backward','backwards','be','became','because','become','becomes','becoming','been','before','beforehand','begin','behind','being','believe','below','beside','besides','best','better','between','beyond','both','brief','but','by','c','came','can','cannot','cant','can\'t','caption','cause','causes','certain','certainly','changes','clearly','c\'mon','co','co.','com','come','comes','concerning','consequently','consider','considering','contain','containing','contains','corresponding','could','couldn\'t','course','c\'s','currently','d','dare','daren\'t','definitely','described','despite','did','didn\'t','different','directly','do','does','doesn\'t','doing','done','don\'t','down','downwards','during','e','each','edu','eg','eight','eighty','either','else','elsewhere','end','ending','enough','entirely','especially','et','etc','even','ever','evermore','every','everybody','everyone','everything','everywhere','ex','exactly','example','except','f','fairly','far','farther','few','fewer','fifth','first','five','followed','following','follows','for','forever','former','formerly','forth','forward','found','four','from','further','furthermore','g','get','gets','getting','given','gives','go','goes','going','gone','got','gotten','greetings','h','had','hadn\'t','half','happens','hardly','has','hasn\'t','have','haven\'t','having','he','he\'d','he\'ll','hello','help','hence','her','here','hereafter','hereby','herein','here\'s','hereupon','hers','herself','he\'s','hi','him','himself','his','hither','hopefully','how','howbeit','however','hundred','i','i\'d','ie','if','ignored','i\'ll','i\'m','immediate','in','inasmuch','inc','inc.','indeed','indicate','indicated','indicates','inner','inside','insofar','instead','into','inward','is','isn\'t','it','it\'d','it\'ll','its','it\'s','itself','i\'ve','j','just','k','keep','keeps','kept','know','known','knows','l','last','lately','later','latter','latterly','least','less','lest','let','let\'s','like','liked','likely','likewise','little','look','looking','looks','low','lower','ltd','m','made','mainly','make','makes','many','may','maybe','mayn\'t','me','mean','meantime','meanwhile','merely','might','mightn\'t','mine','minus','miss','more','moreover','most','mostly','mr','mrs','much','must','mustn\'t','my','myself','n','name','namely','nd','near','nearly','necessary','need','needn\'t','needs','neither','never','neverf','neverless','nevertheless','new','next','nine','ninety','no','nobody','non','none','nonetheless','noone','no-one','nor','normally','not','nothing','notwithstanding','novel','now','nowhere','o','obviously','of','off','often','oh','ok','okay','old','on','once','one','ones','one\'s','only','onto','opposite','or','other','others','otherwise','ought','oughtn\'t','our','ours','ourselves','out','outside','over','overall','own','p','particular','particularly','past','per','perhaps','placed','please','plus','possible','presumably','probably','provided','provides','q','que','quite','qv','r','rather','rd','re','really','reasonably','recent','recently','regarding','regardless','regards','relatively','respectively','right','round','s','said','same','saw','say','saying','says','second','secondly','see','seeing','seem','seemed','seeming','seems','seen','self','selves','sensible','sent','serious','seriously','seven','several','shall','shan\'t','she','she\'d','she\'ll','she\'s','should','shouldn\'t','since','six','so','some','somebody','someday','somehow','someone','something','sometime','sometimes','somewhat','somewhere','soon','sorry','specified','specify','specifying','still','sub','such','sup','sure','t','take','taken','taking','tell','tends','th','than','thank','thanks','thanx','that','that\'ll','thats','that\'s','that\'ve','the','their','theirs','them','themselves','then','thence','there','thereafter','thereby','there\'d','therefore','therein','there\'ll','there\'re','theres','there\'s','thereupon','there\'ve','these','they','they\'d','they\'ll','they\'re','they\'ve','thing','things','think','third','thirty','this','thorough','thoroughly','those','though','three','through','throughout','thru','thus','till','to','together','too','took','toward','towards','tried','tries','truly','try','trying','t\'s','twice','two','u','un','under','underneath','undoing','unfortunately','unless','unlike','unlikely','until','unto','up','upon','upwards','us','use','used','useful','uses','using','usually','v','value','various','versus','very','via','viz','vs','w','want','wants','was','wasn\'t','way','we','we\'d','welcome','well','we\'ll','went','were','we\'re','weren\'t','we\'ve','what','whatever','what\'ll','what\'s','what\'ve','when','whence','whenever','where','whereafter','whereas','whereby','wherein','where\'s','whereupon','wherever','whether','which','whichever','while','whilst','whither','who','who\'d','whoever','whole','who\'ll','whom','whomever','who\'s','whose','why','will','willing','wish','with','within','without','wonder','won\'t','would','wouldn\'t','x','y','yes','yet','you','you\'d','you\'ll','your','you\'re','yours','yourself','yourselves','you\'ve','z','zero');
        if($names) 
        {
            $commonWords = array_merge($commonWords, $names);
        } 
        return preg_replace('/\b('.implode('|',$commonWords).')\b/','',$input);
    }
    function getScore($video) {
        $published = Carbon::parse($video['published']);
        $now = Carbon::now();
        $days = $published->diffInDays($now);
        if($days === 0) {
            $days = 1;
        }
        $av = $video['views']/$days;
        $al = $video['likes']/$days;
        $ad = $video['dislikes']/$days;
        $score = ($av * (1/50)) + ($al * 3) - ($ad * 6);
        return $score;
    }
}