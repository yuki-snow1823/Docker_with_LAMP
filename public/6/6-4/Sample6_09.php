<?php
  $test = $_GET['test'];
  echo "入力値：{$test}<br>";
  if (empty($test) == true) {
      echo '$testは空です<br>';
  } else {
      echo '$testは空ではありません<br>';
  }
  if (is_numeric($test) == true) {
      echo '$testは数値です<br>';
      if ( $test > 0 ) {
          echo '$testは0より大きいです。';
      } else {
          echo '$testは0以下です。';
      }
  } else {
      echo '$testは数値ではありません<br />';
  }
?>
