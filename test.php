<?php
//error_reporting(0);
$url = "https://www.mohfw.gov.in/";
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
$page = curl_exec($curl);

//$states = array();

preg_match_all('/<td align="\'centre" width="83" valign="bottom">(?P<name>[^"]*)<\/td>\s+<td align="\'centre" width="91" valign="bottom">(?P<indian>[^"]*)<\/td>\s+<td align="\'centre" width="90" valign="top">(?P<foreign>[^"]*)<\/td>\s+<td align="\'centre" width="83" valign="top">(?P<cured>[^"]*)<\/td>\s+<td align="\'centre" width="83" valign="top">(?P<death>[^"]*)<\/td>/s', $page, $matches);

echo "<pre>".print_r($matches,true);


if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);
die;
