<?php

$vote = $_REQUEST['vote'];

$filename = "poll_result.txt";
$content = file($filename);

$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if(vote==0) {
  
  $yes = $yes + 1;

}

if(vote==1) {
  
  $no = $no + 1;


}

$insertvalue = $yes."||".$no;
$fp = fopen($filename, "w");
fputs($fp, $insertvalue);
fclose($fp);



?>
