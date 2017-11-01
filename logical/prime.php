<?php 
// prime number 

function checkPrime($i) {
	if(($i > 2 && $i % 2 == 0) || $i < 2) { return false; }
	$num = 3;
	while($i > $num) {
		if($i % $num == 0) {
			return false;
		}
		else { 
			$num += 2; 
		}
	}
return true;
}

$range = 100;
foreach(range(1, 100) as $v) {
	if(checkPrime($v)) { echo $v.'<br />'; }
}
?>