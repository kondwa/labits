<?php
function hashcode($len){
  $a = array();
  for($i=0; $i < $len; $i++){
    $a[]=rand();
  }
  return implode("",$a);
}
// usage: 
$h = hashcode(20);
echo $h;
?>
