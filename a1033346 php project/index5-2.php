<?php
$date=$_POST["date"];
for($i=0;$i<count($date);$i++){
	if($date[$i]==1){
		echo "<img src=a.jpg width=50%><br>";
	}
	if($date[$i]==2){
		echo "<img src=b.jpg width=50%><br>";
	}
	if($date[$i]==3){
		echo "<img src=c.jpg width=50%><br>";
	}
	if($date[$i]==4){
		echo "<img src=d.jpg width=50%><br>";
	}
	if($date[$i]==5){
		echo "<img src=e.jpg width=50%><br>";
	}
	if($date[$i]==6){
		echo "<img src=f.jpg width=50%><br>";
	}
	if($date[$i]==7){
		echo "<img src=g.jpg width=50%><br>";
	}
	if($date[$i]==8){
		echo "<img src=h.jpg width=50%><br>";
	}
	if($date[$i]==9){
		echo "<img src=i.jpg width=50%><br>";
	}
	if($date[$i]==10){
		echo "<img src=j.jpg width=50%><br>";
	}
	if($date[$i]==11){
		echo "<img src=k.jpg width=50%><br>";
	}
	if($date[$i]==12){
		echo "<img src=l.jpg width=50%><br>";
	}
}
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