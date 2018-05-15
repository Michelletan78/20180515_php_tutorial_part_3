<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$b = 100;
for($m=1;$m<=50;$m++){
	if($b>50){
		$b =$b-3;
	}else{
		$b= $b-1;
	}
	echo '每走',$m,'米，所剩香蕉根数为',$b,'<br>';
}

?>