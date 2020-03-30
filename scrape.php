<?php
error_reporting(0);
$strJsonFileContents = file_get_contents("https://api.covid19india.org/data.json");
$array = json_decode($GLOBALS['strJsonFileContents'], true);

$strJsonDistContents = file_get_contents("https://api.covid19india.org/state_district_wise.json");
$dist_array = json_decode($GLOBALS['strJsonDistContents'], true);


function findState($stateToFind){
  $flag=0;
  foreach ($GLOBALS['array']['statewise'] as $i => $state) {
    if($state['state']==$stateToFind) {
      echo "<br/><span>Total Cases: ".$state['confirmed']."<br/>Active Cases: ".$state['active']." <br/>Recovered: ".$state['recovered']." <br/>Deaths: ".$state['deaths']."</span>";;
      $flag=1;
    }
  }
  if($flag==0)
  {echo "error with".$stateToFind;}
  unset($state);
  unset($i);
  unset($flag);
}


function getColor($stateToColor) {
  $flag=0;
  $scale = $GLOBALS['array']['statewise'][1];
  foreach ($GLOBALS['array']['statewise'] as $state) {
    if($state['state']==$stateToColor) {
      $red = (((double)$state['confirmed'])/(double)$scale['confirmed'])*255;
      $red = (int)$red;
      $flag=1;
    }
  }
  if($flag==0){
    echo '0 ';
  }
  else{
    $red = (int)$red;
    echo (string)$red.' ';
  }

  unset($state);
  $flag=0;
}
//getColor('Kerala');


function jnk(){
  $jnk = array_fill_keys(
  array('confirmed', 'active', 'recovered', 'deaths','color'), '');
  foreach ($GLOBALS['array']['statewise'] as $i => $state) {

    if($state['state']=='Jammu and Kashmir'||$state['state']=='Ladakh') {
      (int)$jnk['confirmed'] += (int)$state['confirmed'];
      (int)$jnk['active'] += (int)$state['active'];
      (int)$jnk['recovered'] += (int)$state['recovered'];
      (int)$jnk['deaths'] += (int)$state['deaths'];
    }
  }
        $jnk['color'] = (($jnk['confirmed'])/(double)$GLOBALS['array']['statewise'][1]['confirmed'])*255;
        $jnk['color'] = (int)$jnk['color'];
  echo "<br/><span>Total Cases: ".$jnk['confirmed']."<br/>Active Cases: ".$jnk['active']." <br/>Recovered: ".$jnk['recovered']." <br/>Deaths: ".$jnk['deaths']."</span>\" style=\"fill: rgba(".$jnk['color'];
  unset($jnk);
  unset($state);
  unset($i);
}
//jnk();
//findState('Uttar Pradesh');
function findDistrict($group, $district) {
  $flag=0;
  if(isset($GLOBALS['dist_array'][$group]['districtData'][$district])) {
//   echo $group.' '.$district.' Confirmed: '.$GLOBALS['dist_array'][$group]['districtData'][$district]['confirmed'];
   echo "<br/><span>Total Cases: ".$GLOBALS['dist_array'][$group]['districtData'][$district]['confirmed']."</span>";
   $flag=1;
  }
  if($flag==0)
  { echo "error with ".$group.' '.$district;}
}
//findDistrict('Kerala', 'Ernakulam');

function yoyo($distname){

  foreach ($GLOBALS['dist_array'] as $group) {
    //print_r($group['districtData']['Lucknow']);
    $flag=0;
    if(isset($group['districtData'][$distname])){
      $flag=1;
      $confirm = $group['districtData'][$distname]['confirmed'];
        if($confirm>=45)
        {$color = '255, 8, 0';}
        else if($confirm>=30 && $confirm<45)
        {$color = '220, 8, 0';}
        else if($confirm>=16 && $confirm<30)
        {$color = '190, 8, 0';}
        else if($confirm>=8 && $confirm<16)
        {$color = '150, 8, 0';}
        else if($confirm>=1 && $confirm<8)
        {$color = '110, 8, 0';}
        else if($confirm==0)
        {$color = '30, 8, 0';}

    echo 'title="'.$distname.'<br/><span>Total Cases: '.$confirm.'</span> " style="fill:rgb('.$color.')"';
  }
  }
    if($flag==0)
      echo 'title="'.$distname.'<br/><span>Total Cases: 0</span> " style="fill:rgb(30,8,0)"';
}
//yoyo('Lucknow');


?>
