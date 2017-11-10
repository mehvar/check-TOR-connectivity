<?php
$ip = getIP();
function GetIP() 
{ 
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
		$ip = $_SERVER['REMOTE_ADDR']; 
	else 
		$ip = "unknown"; 
	return($ip); 
}
$url = 'https://exonerator.torproject.org/?ip='. $ip .'&timestamp=2017-10-26&lang=en';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_TIMEOUT, 12); 

$result = curl_exec($ch);

curl_close ($ch);
if(strpos( $result, 'Result is negative' ) !== false) {echo 'No ';}
if( $result == '' ) {echo 'Try Again Later';}
# Or you can use the below commented line instead of line no. 24
#if( $result == '' ) {echo str_repeat("Try again Later -=", 1000);}

?>
