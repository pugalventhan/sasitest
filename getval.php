<?php
function get($url, $params=array()) 
{	

    echo $url = $url.'?'.http_build_query($params, '', '&');

    //die();
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

 $headers = array();
$headers[] = 'AccountKey: +FIlr4lCiuYamEZ9/ZicsA==';
$headers[] = 'UniqueUserID: d57e03d1-c723-4fd3-b452-681dbe1ad1a4';
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        
    $response = curl_exec($ch);
    
    curl_close($ch);

    $values=(array) json_decode($response);

echo "<pre>",print_r($values),"</pre>";
    
    return $response;
}

// Sample call

//get('http://datamall.mytransport.sg/ltaodataservice.svc/BusStopCodeSet', array('$skip'=>'2150')); // get all bus stop

get('http://datamall2.mytransport.sg/ltaodataservice/BusArrival', array('BusStopID'=>'83139','ServiceNo'=>'155')); // get all bus stop

?>