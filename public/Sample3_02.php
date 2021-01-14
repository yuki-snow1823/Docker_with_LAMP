<?php
  $score = 10;
  if ($score >= 80) {		         //$scoreは80以上か判定
   echo "おめでとう！合格です！";	  //$scoreが80以上ならば実行
  } else if ($score >= 50) {	   //$scoreが80未満＆50以上か判定
   echo "惜しい！もう一歩でした！";	 //$scoreが80未満＆50以上ならば実行
  } else {
   echo "残念…不合格です！";    		//$scoreが50未満なら実行   
  }
?>
