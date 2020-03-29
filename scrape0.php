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

preg_match_all('/<td align="\'centre" width="83" *.?align="bottom">(?P<name>[^"]*)<\/td>\s+<td align="\'centre" width="91" valign="bottom">(?P<indian>[^"]*)<\/td>\s+<td align="\'centre" width="90" valign="top">(?P<foreign>[^"]*)<\/td>\s+<td align="\'centre" width="83" valign=".*?">(?P<cured>[^"]*)<\/td>\s+<td align="\'centre" width=".*?" valign="top">(?P<death>[^"]*)<\/td>/s', $page, $matches);
// echo "<pre>".print_r($matches,true);
//echo "<pre>".print_r($matches,true);
//preg_match_all('/<td align="\'centre" width="83" valign="bottom">(?P<name>[^"]*)<\/td>\s+<td align="\'centre" width="91" valign="bottom">(?P<indian>[^"]*)<\/td>\s+<td align="\'centre" width="90" valign="top">(?P<foreign>[^"]*)<\/td>\s+<td align="\'centre" width="83" valign="bottom">(?P<cured>[^"]*)<\/td>\s+<td align="\'centre" width="83" valign="top">(?P<death>[^"]*)<\/td>/s', $page, $matches1);
preg_match('/<p><strong>\(\*including foreign nationals, as on (.*?)\)<\/strong><\/p>/s',$page, $time);
preg_match('/<td align="\'centre" width="91" valign="bottom"><strong>(?P<indian>[^"]*)<\/strong><\/td>\s+<td align="\'centre" width="90" valign="top">\s+<strong>(?P<foreign>[^"]*)<\/strong>\s+<\/td>\s+<td align="\'centre" width="83" valign="top">\s+<strong>(?P<cured>[^"]*)<\/strong>\s+<\/td>\s+<td align="\'centre" width="83" valign="top">\s+<strong>(?P<death>[^"]*)<\/strong>\s+<\/td>/s',$page, $total);
$tot = (int)$total["indian"] + (int)$total["foreign"];
$tot_active = (int)$total['indian'] + (int)$total['foreign'] - (int)$total["cured"] - (int)$total["death"];
//echo "Total cases in India: ".$tot."<br> Indian Nationals:".$total['indian']."<br> Foreign Nationals:".$total['foreign']."<br> Cured:".$total['cured']."<br> Deaths:".$total['death'];
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

include('states_code.php');

	for($i=0;$i<27;$i++)
	{
		if ($i == 10)
		{
			$state_total[10] = (int)$matches[2][10]+(int)$matches[3][10]+(int)$matches[4][10]+(int)$matches[5][10];
			$state_active[10] = (int)$matches[2][10]+(int)$matches[3][10];
			$state_total[13] = (int)$matches[2][13]+(int)$matches[3][13]+(int)$matches[4][13]+(int)$matches[5][13];
			$state_active[13] = (int)$matches[2][13]+(int)$matches[3][13];
			$state_total[10] = $state_total[13] + $state_total[10];
			$state_active[10] = $state_active[13] + $state_active[10];
			$states[10] = "<br/><span>Total Cases: ".$state_total[10]."<br/>Active Cases: ".$state_active[10]." <br/>Cured: ".((int)$matches[4][13]+(int)$matches[4][10])." <br/>Deaths: ".((int)$matches[5][13]+(int)$matches[5][10])."</span>";
			$color[10] = (((int)$state_active[10] / (int)$tot_active) * 2550);
			continue;
		}
		if ($i == 13)
		{
			continue;
		}
		$state_total[$i] = (int)$matches[2][$i]+(int)$matches[3][$i]+(int)$matches[4][$i]+(int)$matches[5][$i];
		$state_active[$i] = (int)$matches[2][$i]+(int)$matches[3][$i];
		$states[$i] = "<br/><span>Total Cases: ".$state_total[$i]."<br/>Active Cases: ".$state_active[$i]." <br/>Cured: ".$matches[4][$i]." <br/>Deaths: ".$matches[5][$i]."</span>";
        $color[$i] = (((double)$state_active[$i] * 2550) / (double)$tot_active) + 50;
	}
	$states[30] = "<br/><span>Total Cases: 0<br/>Active Cases: 0 <br/>Cured: 0 <br/>Deaths: 0</span>";
	$color[30] = 15;
	$response = json_encode($matches);

	$fp = fopen('results.json', 'w');
	fwrite($fp, json_encode($response));
	fclose($fp);
	//echo $response;

curl_close($curl);
