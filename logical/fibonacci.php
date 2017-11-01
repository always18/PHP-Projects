<?php 
// fibonacci series 
$cnt = 10; $frst = -1; $scnd = 1;
 
for($i=0;$i<$cnt;$i++) {
	$sum = $frst+$scnd;
	$frst = $scnd;
	$scnd = $sum;
	echo $sum.'<br />';
}
?>