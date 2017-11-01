<?php //pyramid 
$row = 10;
for($i=0;$i<$row;$i++) {
	for($j=$row-$i;$j>0;$j--) {
		echo '&nbsp;';
	}
	for($j=0;$j<=$i;$j++) {
		echo '* ';
	}
	echo '<br />';
}


?>