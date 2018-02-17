<?php
session_start();
require 'autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'ta4iDC8at7SaXxSyvHH4e1aok'); // add your app consumer key between single quotes
define('CONSUMER_SECRET', 'ACZTXH22tOz0dWwwe2mzdYj4DdjzGVsJtdtkR4d37q8Mw4Sg0s'); // add your app consumer secret key between single quotes
define('OAUTH_CALLBACK', 'https://banausic-outfits.000webhostapp.com/callback.php'); // your app callback URL

if (!isset($_SESSION['access_token'])) {
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
	$_SESSION['oauth_token'] = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
	$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
	//echo $url;
	header('Location:'.$url);
} else {

	if(1){
	$access_token = $_SESSION['access_token'];
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	$content = $connection->get("account/verify_credentials");
	$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
	echo "test2<br><br>please wait downloading..<br>";
	echo $content->screen_name;
	echo "<br><br>";










// NOTE: Be sure to uncomment the following line in your php.ini file.
// ;extension=php_openssl.dll

// **********************************************
// *** Update or verify the following values. ***
// **********************************************

// Replace the accessKey string value with your valid access key.
$accessKey = '0a6de441a4eb45759614d2446c1f12bb';

// Replace or verify the region.

// You must use the same region in your REST API call as you used to obtain your access keys.
// For example, if you obtained your access keys from the westus region, replace 
// "westcentralus" in the URI below with "westus".

// NOTE: Free trial access keys are generated in the westcentralus region, so if you are using
// a free trial access key, you should not need to change this region.
$host ='https://eastus.api.cognitive.microsoft.com/';
// 'https://westus.api.cognitive.microsoft.com'
$path = '/text/analytics/v2.0/sentiment';

function GetSentiment ($host, $path, $key, $data) {

    $headers = "Content-type: text/json\r\n" .
        "Ocp-Apim-Subscription-Key: $key\r\n";

    $data = json_encode ($data);

    // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
    // http://php.net/manual/en/function.stream-context-create.php
    $options = array (
        'http' => array (
            'header' => $headers,
            'method' => 'POST',
            'content' => $data
        )
    );
    $context  = stream_context_create ($options);
    $result = file_get_contents ($host . $path, false, $context);
    return $result;
}




/***********



$data = array (
    'documents' => array (
        array ( 'id' => '0', 'language' => 'en', 'text' =>$text0  ),

        //'I really enjoy the new XBox One S. It has a clean look, it has 4K/HDR //resolution and it is affordable.'
        
        array ( 'id' => '1', 'language' => 'en', 'text' =>$text1  ),

        array ( 'id' => '2', 'language' => 'en', 'text' =>$text2  ),

        array ( 'id' => '3', 'language' => 'en', 'text' =>$text3  ),

        array ( 'id' => '4', 'language' => 'en', 'text' =>'you are a slut'  ),


        //'Este ha sido un dia terrible, llegué tarde al trabajo debido a un accidente automobilistico.'


    )
);

print "Please wait a moment for the results to appear.";

$result = GetSentiment ($host, $path, $accessKey, $data);

echo json_encode (json_decode ($result), JSON_PRETTY_PRINT);


	**************/









	for($i=0;$i<=25;$i++){

		echo"TWEET : ";
		print_r($statuses[$i]->text);
		echo "<br>";

		$data = array (
    'documents' => array (
        array ( 'id' => $i, 'language' => 'en', 'text' => $statuses[$i]->text),

    )
);


		print "Please wait a moment for the results to appear.";

		$result = GetSentiment ($host, $path, $accessKey, $data);
	//	echo "b4 score only";
	//	echo $result[documents];
    //  echo "after score only";
        
		echo json_encode (json_decode ($result), JSON_PRETTY_PRINT);

		echo "<br>";
		echo "<br>";
		
		

	}



}























	/************  uncomment the below 3 lines to get just the whole returned status *************/



	//print_r($statuses);
	//$user = $connection->get("account/verify_credentials");
	//echo $user->screen_name;
	
	//print_r($user);
}

//////

/*
$connection = new TwitterOAuth($consumer_key,$consumer_secret,$oauth_access_token,$oauth_access_token_secret);
	$content = $connection->get("account/verify_credentials");


	$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
	*/
	
	
	
	
	?>