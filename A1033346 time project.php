<?php
date_default_timezone_set("Asia/Taipei");
$cd1 =  mktime(0, 0, 0, 1, 1, 2018);
$cd2 = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
$CD = $cd1 - $cd2;
$a = floor($CD / 86400);
$left = $CD % 86400;
$b  = floor($left / 3600);
$left = $left % 3600;
$c = floor($left / 60);
$left = $left % 60;
$d = floor($left / 1);
echo "Right now the time is : ".date("d-m-Y H:i:s")."<br>";
echo "And it's left: ".$a." day ".$b." hour ".$c." minutes ".$d." seconds, to dooms day";
?>