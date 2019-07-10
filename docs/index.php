<?php

$consumer_key = 'rvtXqDVHZF8soSobEsDWTSIAk';
$consumer_secret = 'n7KfsSlcesMZhT86RgvDXtURu5VfEK8qKFFbooXks4PHVtNQuT';
$access_token = 'qFSGk0u1lTpruk0umaOCrPhuv7N9l2';
$access_token_secret = 'Myf4Aecz8NHs7jCMPyMdF5NNyqt3iAPRKd1N4UB1DGU3G';

// Load library
require "../autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// Connect to the API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

// Gets tweet
$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

print_r($statuses);