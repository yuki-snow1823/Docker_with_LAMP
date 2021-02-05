<?php
session_start();
var_dump($_SESSION);
?>
<html>
<head><title>Sample6_02</title></head>
<body>
<p>セッション動作確認用メニュー</p>
<a href="./Sample6_03.php">セッションの値を確認する</a><br>
<a href="./Sample6_04.php">セッションに値をセットする</a><br>
<a href="./Sample6_05.php">セッションの値を破棄する</a><br>
</body>
</html>