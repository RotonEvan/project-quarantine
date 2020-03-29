<?php
error_reporting(0);
$strJsonFileContents = file_get_contents("https://api.covid19india.org/data.json");
$array = json_decode($GLOBALS['strJsonFileContents'], true);
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
?>
