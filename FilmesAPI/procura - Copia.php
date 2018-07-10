<?php
	$name = $_POST['titulo'];

	$url = "http://www.omdbapi.com/?i=tt3896198&apikey=6dd48ad4";

	$client = curl_init($url);

	curl_exec($client);

	$response=curl_exec($client,CURLOPT_RETURNTRANSFER,1);

	$result=json_decode($response);

	echo $result->Rated;

	
?>