<?php
  $roomcolor = $_GET['roomcolor'];
  if ($roomcolor == "red") {
      header("location: ./Sample6_06r.php ");
  } else {
      header("location: ./Sample6_06b.php ");
  }
  exit;
?>