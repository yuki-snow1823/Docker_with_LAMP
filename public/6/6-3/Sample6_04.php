<?php
session_start();

$_SESSION["test"] = "jikkyo";
echo 'session["test"]に' . $_SESSION["test"] . 'をセットした';
?>
<br><a href="./Sample6_02.php">戻る</a>
