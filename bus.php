<?php
//  Initiate curl

$val='$Skip=50';
$params=urlencode($val);
$url="http://datamall.mytransport.sg/ltaodataservice.svc/BusStopCodeSet?".$params;
echo $url1=urlencode($url);
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$headers = array();
$headers[] = 'AccountKey: +FIlr4lCiuYamEZ9/ZicsA==';
$headers[] = 'UniqueUserID: d57e03d1-c723-4fd3-b452-681dbe1ad1a4';
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result=curl_exec($ch);
$values=(array) json_decode($result);

echo "<pre>",print_r($values),"</pre>";
// Closing
curl_close($ch);

// Will dump a beauty json :3
//var_dump(json_decode($result, true));



//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL,"http://datamall2.mytransport.sg/ltaodataservice/BusArrival?BusStopID=83139");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $headers = array();
// $headers[] = 'AccountKey: +FIlr4lCiuYamEZ9/ZicsA==';
// $headers[] = 'UniqueUserID: d57e03d1-c723-4fd3-b452-681dbe1ad1a4';
// $headers[] = 'Accept: application/json';
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// $server_output = curl_exec ($ch);
// curl_close ($ch);


?>