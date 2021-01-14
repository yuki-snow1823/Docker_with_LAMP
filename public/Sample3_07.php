<?php
  for ($cnt=0; $cnt<10; $cnt++){

    //$cntが2または4または６かどうか
    if($cnt == 2 || $cnt == 4 || $cnt == 6){
      continue;	//以降の処理を全てキャンセルして、$cnt++まで戻る
    } 
    //$cntが8かどうか
    if($cnt == 8){
      break;	//以降の処理を全てキャンセルして、forループを抜ける
    }
    echo "{$cnt}回目<br>";
  }
?>