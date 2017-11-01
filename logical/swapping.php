<?php 
function swap1(&$x,&$y) {
    $x ^= $y ^= $x ^= $y;
}

function swap2(&$x,&$y) {
    list($x,$y) = [$y,$x];
}

$x = 12; $y = 230;
swap2($x, $y);

echo $x.'<br />'; echo $y;
?>