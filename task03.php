<?php
$name = "Suguru";
//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装
if ($name == "Suguru") {
  echo "私は $name です";
} else {
  echo "$nameではありません";
}

echo PHP_EOL;

//for文を使って、1から10000までの合計の値を表示
$total = 1;

for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

echo PHP_EOL;

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力
$fruits = array("kiwi", "cherry", "apple", "orange", "mango");

foreach($fruits as $fruits){
  echo $fruits;
  echo PHP_EOL;
}

//【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo PHP_EOL;
  }
}
