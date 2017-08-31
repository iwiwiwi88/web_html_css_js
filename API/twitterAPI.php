<?php
	session_start();
	require_once("twitteroauth/twitteroauth.php");
	
	$apikey="xxx";
	$apisecret="xxxx";
	$accesstoken="xxxx";
	$accesssecret="xxxxxx";
	
	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);
	
	// @@@@@@@@@@@@@@ GET @@@@@@@@@@@@@@@
	$tweets = $connection->get("link to twitter timeline"); // screen_name is a user page
	// echo json_decode($tweets);
	foreach($tweets as $tweet) {
		echo $tweet->text;
		echo $tweet->favourite_count;
		echo "<br />";
	}
	
	// @@@@@@@@@@@@@@ POST with POST Data @@@@@@@@@@@@@@@
	// need to change access tokens
	$response = $connection->post("link to post twitter timeline", array("status": "This is a status"));
	print_r($response);
?>