<?php

  include '../connect/dbconfig.php';
  #Nhan gia tri tu form input
  $email = $_POST['re_email'];
  $pass = md5($_POST['re_pass']);
  $c_pass = md5($_POST['re_cpass']);

  if ($c_pass == $pass) {
    if (isset($_POST["register"])) {
      $check_email = "SELECT * FROM person WHERE '$email' = Email";
      $check_query = mysqli_query($conn, $check_email);
      $check_num_rows = mysqli_num_rows($check_query);
      if ($check_num_rows > 0) {
        # code...
        echo "<script>alert('Email đã được đăng kí. Vui lòng đăng nhập hoặc đăng kí với email khác.'); history.back();</script>";
      }
      else {
        # code...
        $sql = "INSERT INTO person (Email, Pass) VALUES ('$email', '$pass')";
        if($conn->query($sql) == TRUE){
          echo "<script>alert('Đăng kí thành công.'); history.go(-2);</script>";
          #header('Location:../index.php');
        }
        else {
          echo "Error: ". $sql . "<br>". $conn->error;
        }
      }
    } # check $_POST['register']
  }# conform pass
  else {
    echo "<script>alert('Vui lòng xác nhận chính xác mật khẩu.'); history.back(); </script>";
  }
?>
