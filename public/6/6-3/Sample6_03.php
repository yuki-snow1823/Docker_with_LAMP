<?php
session_start();

if(isset($_SESSION["test"])){
  echo '$_SESSION["test"]の値は' .$_SESSION["test"];
}else{
  echo "セッションに値はセットされていません";
}
?>
<br><a href="./Sample6_02.php">戻る</a>
