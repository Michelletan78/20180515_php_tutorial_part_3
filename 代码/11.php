<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

for($g=1;$g<=18;$g++){
	for($m=1;$m<=31;$m++){
		$x = 100-$g-$m;
			if($x/3+$m*3+$g*5 == 100){
					echo $x,':',$m,':',$g,'<br>';
			}		
	}
}

?>