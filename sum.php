<?php

function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }
    return $result;
}
echo sum(100) . "\n";





function sum2($num) {
 return $num * 2;  
}
echo sum2(2) . "\n";



function f($a,$b){
    return $a + $b;
}
echo f(5,5) . "\n";   




function sum3($arr){
  $result = 1;
  foreach($arr as $arr2){
    $result *= $arr2;
  }
  return $result;
}
echo sum3(array(1, 3, 5 ,7, 9)) . "\n";



function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a) {
      $max_number = $a;
    }
  }
  return $max_number;
 }
 echo max_array(array(1, 3, 11, 5 ,7, 9)) . "\n";



$text = '<p>php practice.</p>';
echo strip_tags($text) . "\n";

$fruits = array("orenge", "apple");
array_push($fruits, "banana", "kiwi");
print_r($fruits) . "\n";

$array1 = array(1,2,3,4);
$array2 = array("a", "b");
$result = array_merge($array1, $array2);
print_r($result) . "\n";

echo time() . "\n";

echo  mktime() . "\n";

echo date("Y年m月d日h時i分s秒" , mktime(10,23,23,10,23,1995)) . "\n";
