<?php


$firstArr=[1,2,3=>[1,2,3]];



function myCounter(array $firstArr) {
	 	foreach($firstArr as $value)
	 {
		 if (empty($firstArr))
		 {
           echo "Массив пуст";
		 }
		 else 
		 {
		   echo gettype($value), "\n"; 
		 }
	 
	 }
 }

 myCounter($firstArr);

 echo '<br>';

function get_sum(array $arr, $n) {
$sum = 0;
for ($i = 0; $i <= $n; $i++) {
    $sum += $arr[$i];
}
return $sum;
}

$arr = [2, 4, 5, 6, 4, 5]; $n = 5;
echo get_sum($arr, $n);

echo '<br>';

$data = "bbbb";

foreach (count_chars($data, 1) as $i => $val) {
   echo "\"" , chr($i) , "\" встречается в строке $val раз(а).\n";
}




?>