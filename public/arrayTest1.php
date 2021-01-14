<?php
  //10個の乱数を持つ配列valuesを作成
  for($i = 0; $i < 10; $i++){
    $values[] = rand(0,99);  
  }
  $max = 0; //仮の最大値を設定
  echo "配列の中身：[";
  //配列の中身をすべて出力＆最大値の設定（複数行）
  foreach($values as $j){
    echo $j.",";
    if($max < $j){
      $max = $j;
    }
  } //入れ続けて、変え続ける
  echo "]<br>";
  echo "最大値は ".$max." です！";
?>
