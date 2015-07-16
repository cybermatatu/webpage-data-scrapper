<?php
$query = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%20in%20%28%22USDKES%22,%20%22GBPKES%22,%20%22JPYKES%22%29&format=json&env=store://datatables.org/alltableswithkeys";

$rates[] = NULL;

function httpGet($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}
 
echo '<pre>';
$rates = json_decode(httpGet($query),true);

//print_r(httpGet($query));

foreach ($rates as $ratez) {

	//foreach ($rate['results'] as $key => $value) {
	foreach ($ratez['results']['rate'] as $value) {

		echo $value['Name'].' : '.$value['Rate'].' : '.$value['Date'].' : '.$value['Time'].' : '.$value['Ask'].' : '.$value['Bid'].'<br/>';

	}
}