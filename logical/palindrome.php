<?php 
// Number Reverse
function numreverse($num) {
	if($num < 10) { return $num; }
	else { $number = 0;
		while($num > 0) {
			$number = $number*10 + $num % 10;
			$num = floor($num/10);
		}
	}
return $number;
}

echo numreverse(3);
?>