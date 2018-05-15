<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
echo '<table border=1>';
for($a=1;$a<=7;$a++){
	echo '<tr>';
	for($b=1;$b<=6;$b++){
		echo '<td>呵呵</td>';

	}
	echo '</tr>';
}
echo '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border=1>
		<?php for($a=1;$a<=5;$a++){?>
		<tr>
			<?php for($b=1;$b<=4;$b++){?>
			<td>呵呵</td>
			<?php }?>
		</tr>
		<?php }?>
	</table>
</body>
</html>