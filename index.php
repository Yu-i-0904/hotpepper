<?php
//APIキー
require_once('config.php');

//リクエストURL
$url = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=' . $api_key . '&large_area=Z011&order=4&count=3';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
