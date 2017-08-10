<?php
// Written by Kondwani Hara.
// kondwa@gmail.com.
function rng($len){
  $a = array();
  for($i=0; $i < $len; $i++){
    $a[]=rand(0,9);
  }
  return implode("",$a);
}
// usage:
// eg. Generate a 20 digit code.
$n = rng(20);
echo $n;
?>
