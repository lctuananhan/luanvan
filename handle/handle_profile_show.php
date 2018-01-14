<?php
  //session_start();
  include 'connect/dbconfig.php';
  $Fk_person = $_SESSION['MaPer'];
  $sql = "SELECT * FROM users WHERE Fk_person = '$Fk_person'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    # code...
    $show_name = $row['Ten_users'];
    $show_phone = $row['SDT_users'];
    $show_address = $row['Diachi_users'];
    $_SESSION['show_name'] = $show_name;
    $_SESSION['show_phone'] = $show_phone;
    $_SESSION['show_address'] = $show_address;
  }

 ?>
