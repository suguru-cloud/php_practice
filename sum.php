<?php
function sum(){
  $result = 0;
  for($i = 1; $i <= 10; $i++ ){
    $result += $i;
  }
  return $result;
}
echo sum();

echo PHP_EOL;

//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成
function double($max){
  $result = 0;
  for($i =1; $i <= $max; $i++ ){
    $result = $i*2;
    echo $result;
    echo PHP_EOL;
  }
}

echo double(5);

echo PHP_EOL;

//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成
$a = 5;
$b = 10;
function f($a, $b){
  return $a + $b;
}
echo f($a,$b);

echo PHP_EOL;

/*
$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数を作成
*/
$arr = array(1, 3, 5, 7, 9);
function a($arr) {
  $result = 1;
  foreach($arr as $arrs){
    $result *= $arrs;
  }
  return $result;
}
echo a($arr);

echo PHP_EOL;

//配列の中で一番大きい値を返す max_array という関数を実装
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
   if ($max_number >= $a) {
     echo $max_number;
   }
 }
 return $max_number;
}
echo max_array($arr);

echo PHP_EOL;

//strip_tags
$text = "<h1>test</h1><p>test</p>";
echo strip_tags($text);

echo PHP_EOL;

//array_push
$country = array("japan", "newyork", "newzealand");
array_push($country, "london", "taiwan");
print_r($country);

echo PHP_EOL;

//array_merge
$country1 = array("japan", "newyork", "newzealand");
$country2 = array("london", "taiwan");
$country3 = array("korea", "belarus");
$country_merge = array_merge($country1, $country2, $country3);
print_r($country_merge);

echo PHP_EOL;

//time
echo "現在のタイムスタンプ:" .time();

echo PHP_EOL;

//mktime
$timestamp = mktime(0, 0, 0, 1, 1, 2019);
echo $timestamp;

echo PHP_EOL;

//date
echo date("Y/m/d H:i:s");
echo PHP_EOL;
echo date("Y/m/d H:i:s", 10);
