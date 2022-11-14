<?php



$baseURLstart ="https://news.google.com/rss/search?q=";
$feed = get_field('feed_url');

$xmlfeedurl = $baseURLstart.$feed; //Stores RSS Feed URL


$xml = file_get_contents($xmlfeedurl) or die ("Failed to load"); //Retrives RSS Feed URL
echo '<div class="container mt-4">'; // Renders the bootstrap contailer
echo '<div class="col">'; // Renders the bootstrap contailer
$xml_parse = simplexml_load_string($xml); // Stores $xml to $xml_parse via simplexml_load_string
//echo "<pre>";print_r($xml_parse);echo "</pre>"; //Uncomment to run test/debug

//echo '<br>';
//echo $xmlfeedurl;
//echo '<br>';
//echo $xml_parse;
//echo '<br>';
//echo $baseURLstart;

$LoopCounter = 0; //Sets loop counter to zero
//$count = get_field('number_of_articles');
	while($LoopCounter < 10){
		foreach($xml_parse->channel->item as $feed=>$feeds)
		{
			echo '<ul class="list-group">';
			echo '<li class="list-group-item"><h4>'.$feeds->title.'</h4></li>';
			$RSSlink  = $feeds->link;
			$utmRSSlink= $RSSlink. "/" . $utm  = $_REQUEST[ '?				
			utm_source=techhobbyist.co.uk&utm_medium=techhobbyist.co.uk+homepage+google+news+feed'];	;
			$RSSdescription = strip_tags($feeds->description);
			echo '<li class="list-group-item"><p>Description: '.$RSSdescription .'</p></li>';
			echo '<li class="list-group-item"><a href='.$utmRSSlink.' target="_blank"</>Link to article</a></li>';
			echo '<li class="list-group-item"><h6>Posted: '.$feeds->pubDate.'   By   <i>'.$feeds->source.'</i></h6></li>';
			echo '</ul><br>';
			$LoopCounter ++; // Increments $LoopCounter by 1.
			if ($LoopCounter == 10) { // Breaks when $LoopCounter = 10
			            break 2;  // breaks both foreach loop and while loop 
			}
		}		
		}
echo '</br>';




//About Feed
foreach($xml_parse->channel as $aboutfeeds=>$aboutfeed)
		{
			echo '<ul class="list-group">';
			echo '<li class="list-group-item"><h6>Updated on: '.$aboutfeed->lastBuildDate.'</i></h6></li>';
			echo '<li class="list-group-item"><h6>Copyright @  '.$aboutfeed->copyright.'</i></h6></li>';
			$feedlink  = $aboutfeed->link;
			echo '<li class="list-group-item"><a href='.$feedlink.'</>RSS feed link</a></li>';
			echo '<li class="list-group-item"><p>Language: '.$aboutfeed->language.'</i></p></li>';
			echo '<li class="list-group-item"><p>Generator: '.$aboutfeed->generator.'</i></p></li>';
			echo '</ul><br>';
		}		
echo '</div>';
echo '</div>';

?>
