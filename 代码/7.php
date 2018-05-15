<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
for($x=0;$x<3;$x++){
	for($y=0;$y<10;$y++){
		for($z=0;$z<10;$z++){
			if($x!=4 && $y !=4 && $z!=4){
				echo $x*100+$y*10+$z,'<br>';
			}
		}
	}
}


?>
 