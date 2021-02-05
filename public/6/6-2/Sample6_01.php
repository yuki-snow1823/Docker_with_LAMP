<?php
  $reserveDt = "2016-04-20";	// 空室確認をしたい日付
  $sql = "SELECT * FROM room WHERE room_no NOT IN
          (SELECT room_no FROM reserve
          WHERE date(reserve_date) = '{$reserveDt }')";
  echo $sql;
  require_once('./dbConfig.php');
  $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if ($link == null) {
      die("接続に失敗しました：" . mysqli_connect_error());
  }
  mysqli_set_charset($link, "utf8");
  $result = mysqli_query($link, $sql);
  if (mysqli_num_rows($result) == 0) {
      echo "空室はありません";
  } else {
      echo "空室があります:". mysqli_num_rows($result)."件";
  }
  mysqli_free_result($result);
  mysqli_close($link);
?>