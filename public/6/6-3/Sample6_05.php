<?php
session_start();

unset($_SESSION["test"]);
echo 'session["test"]の値を破棄した';
?>
<br><a href="./Sample6_02.php">戻る</a>
