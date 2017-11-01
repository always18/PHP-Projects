<?php
function swap(&$arr, $a, $b) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}

function bubble_sort($arr) {
    $size = count($arr);
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
             
			if ($arr[$j+1] < $arr[$j]) {
			   swap($arr, $j, $j+1);
            }
        }
    }
    return $arr;
}

function selection_sort($data)
{
    $n=count($data);
    $nextSwap=null;     //the index of next min value or max value
    $temp=null;
 
    for($i=0; $i<$n-1; $i++)//outer loop
    {
 
        $nextSwap=$i;
        for($j=$i+1; $j<$n; $j++)//inner loop
        {
            if( $data[$j]<$data[$nextSwap] ) //change the < to > for descending order
            {
                $nextSwap=$j; 
            }
        }
 
        //swap the current index of the outer loop with the next min value
        if($nextSwap != $i) {
			swap($data, $nextSwap, $i);
		}
    }
 
    return $data;
}

function insertion_sort($arr) {
	for($i=0;$i<count($arr);$i++) {
		$val = $arr[$i];
		$j = $i-1;
		while($j>=0 && $arr[$j] > $val){
			$arr[$j+1] = $arr[$j];
			$j--;
		}
		$arr[$j+1] = $val;
	}
	return $arr;	
}

/* test bubble sort */

$arr = array(5,4,3,2,1);

print("Before sorting");
echo '<pre>'; print_r($arr); echo '</pre>';

$arr = bubble_sort($arr);
print("After sorting by using bubble sort");
echo '<pre>'; print_r($arr); echo '</pre>';

$arr = selection_sort($arr);
print("After sorting by using selection sort");
echo '<pre>'; print_r($arr); echo '</pre>';

$arr = insertion_sort($arr);
print("After sorting by using insertion sort");
echo '<pre>'; print_r($arr); echo '</pre>';

?>
