<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

for($num=1,$c=0;$num<100;$num++){
	if($num%2==0){
		echo $num;
		$c = $c+1;
		if($c%5==0){
			echo '<br>';
		}
	}
}

?>