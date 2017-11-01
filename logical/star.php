<?php 
$row = 5;
//top to bottom 
for($i=0; $i<$row; $i++) {
	for($j=0;$j<=$i; $j++) {
		echo '* ';
	}
	echo '<br />';
}

echo '<br /><br />'; 

//bottom to top 
for($i=$row; $i>0; $i--) {
	for($j=$i;$j>0; $j--) {
		echo '* ';
	}
	echo '<br />';
}

echo '<br /><br />'; 

//full triangle
for($i=0; $i<$row; $i++) {
	for($j=0;$j<=$i; $j++) {
		echo '* ';
	}
	echo '<br />';
}

for($i=$row-1; $i>0; $i--) {
	for($j=$i;$j>0; $j--) {
		echo '* ';
	}
	echo '<br />';
}
?>