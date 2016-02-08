<?php
// written by Kondwani Hara.
// kondwa@gmail.com
// Copyright © All rights reserved.
function hashcode($len){
  $a = array();
  for($i=0; $i < $len; $i++){
    $a[]=rand(0,9);
  }
  return implode("",$a);
}
// usage:
// eg. Generate a 20 digit code.
$h = hashcode(20);
echo $h;
?>
