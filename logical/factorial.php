<?php 
// Factorial 
function fact($num, $res = 1) {
	if($num > 1) { 
		$res *= $num;
		$num--; 
		return fact($num, $res);
	}
return $res;	
}

echo fact(5);
?>