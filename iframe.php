<?php
function youtubeembed($url)
{
	$url=trim($url);
	$url=parse_url($url);
	if(isset($url['query']))
	{
	  $videoidarry=explode('=', $url['query']);
      $videoid=$videoidarry[1];
    }
    else 
    {
    	$videoidarry=explode('/', $url['path']);
    	$videoid=$videoidarry[1];
    }
echo'<iframe width="480" height="270" src="https://www.youtube.com/embed/'.$videoid.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';

}

 //rawurlencode(); url encode
//simplexml_load_string(); 

function curl_get($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

    //It's not about proxy, it's about how to use googleapis.
    //Add CURLOPT_SSL_ on your code and set them into false

    //curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//PHP Curl does not work on localhost?
    //curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);//PHP Curl does not work on localhost?

    //**********************//

    $return = curl_exec($curl);
    curl_close($curl);
    return $return;
}

function youtubeoembed($url)
{   

	$url=trim($url);
	$url=parse_url($url);
	if(isset($url['query']))
	{
	  $videoidarry=explode('=', $url['query']);
      $videoid=$videoidarry[1];
    }
    else 
    {
    	$videoidarry=explode('/', $url['path']);
    	$videoid=$videoidarry[1];
    }

	//oembed from json

	$json_url ='https://www.youtube.com/oembed?url=http%3A//youtube.com/watch%3Fv%3D'.$videoid.'&format=json';
	$oembed = json_decode(curl_get($json_url));

	//oembed from xml

/*	$xml_url ='https://www.youtube.com/oembed?url=http%3A//youtube.com/watch%3Fv%3D'.$videoid.'&format=xml';
	$oembed = simplexml_load_string(curl_get($xml_url));*/
    //var_dump($oembed);
echo "<img src='".$oembed->thumbnail_url."'>";// video thumbnail image

echo "<br/>";
echo "<br/>";

echo html_entity_decode($oembed->html);
//provider_url,html,title,author_name,author_url,thumbnail_url

}

?>

<h1>Youtube Embed</h1>
<br/>

<?php youtubeembed('https://youtu.be/_FnTuCPVWPE'); //youtube embed ?>

<br/>

<h1>Youtube OEmbed</h1>
<br/>
<?php
//youtubeoembed('https://www.youtube.com/watch?v=_FnTuCPVWPE'); //youtube oembed

//https://www.youtube.com/watch?v=_FnTuCPVWPE
//https://youtu.be/_FnTuCPVWPE

?>