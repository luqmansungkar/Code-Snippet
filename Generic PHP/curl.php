<?php

function kurl($url, $method, $json){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
		'Content-Length: ' . strlen($json),
		'Authorization: Basic ZGVsaWdodDpkZWxpZ2h0',
		));

	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
	if ($method != 'GET') {
		curl_setopt($curl, CURLOPT_POSTFIELDS,$json);
	}
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	$result = curl_exec($curl);
	if($result === false)
	{
	    echo 'Curl error: ' . curl_error($curl).'<br>';
	}
	curl_close($curl);
	return $result;
}

?>