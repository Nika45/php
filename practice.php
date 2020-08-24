<?php
echo 'hello php!' . "\n";

$a = 3;
$b = 7;
echo $a + $b . "\n";

$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10", "11月", "12月"];
echo $array_month[7] . "\n";

$hello = "Hello,";
$name = "Yu's World!";
echo $hello . $name . "\n";

$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost . "\n";

$_2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $_2018_calendar["December"] . "\n";




$name = "Yu";
if($name = "Yu") {
  echo "私は　あなたの名前です" . "\n";
} else {
  echo "あなたの名前ではありません" . "\n";
}


$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total . "\n";



$fruits = array("apple", "orange", "peach", "kiwi", "banana");
foreach($fruits as $fruits) {
  echo "要素は" . $fruits . "\n";
}


for($i = 1; $i <= 100; $i++){
  if(($i % 5) == 0){
    echo $i . "\n";
  }
}
