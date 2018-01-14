<?php session_start(); ?>
<?php
  include '../connect/dbconfig.php';
  if (isset($_POST['login'])) {
    /*$email = $_POST['login_email'];
    $sql = "SELECT Pass FROM person WHERE Email = $email";
    $password = mysqli_query($sql);
    $password = mysqli_fetch_array($password)['login_pass'];
    $check = crypt($_POST['login_pass'], $password);
    if (hash_equals($check, $password)) {
      # code...
      $_SESSION['email'] = $email;
      header('Location:../index.php');
    }
    else {
      # code...
      echo "<script>alert('Email hoặc mật khẩu không đúng. Vui lòng đăng nhập lại'); history.back();</script>";
    }*/
    # code...
    //$_SESSION['message'] = '';
    $email = $_POST['login_email'];
    $pass = md5($_POST['login_pass']);
    # Check SQL injection
    /*$email = strip_tags($email);
    $email = addslashes($email);
    $pass = strip_tags($pass);
    $pass = addslashes($pass);*/
    # Query database
    $sql = "SELECT * FROM person WHERE Email = '$email' AND Pass = '$pass'";
    $query = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($query);
  //  $err = "Email hoặc password không đúng.";
    if ($num_rows == 0) {
      # code...
      $_SESSION['message'] = 'Email hoặc mật khẩu không đúng. Vui lòng đăng nhập lại';
      echo "<script> history.back();</script>";
      //echo "<script>alert('Email hoặc mật khẩu không đúng. Vui lòng đăng nhập lại'); history.back();</script>";
    }
    else {
      # code...
      $row = mysqli_fetch_array($query);
      $type = $row['type'];
        # code...

      if ($type == 1) {
        # code...
        $_SESSION['MaPer'] = $row['MaPer'];
        $_SESSION['admin'] = $email;
      }
      else {
        # code...
        $_SESSION['MaPer'] = $row['MaPer'];
        # $_SESSION['re_job'] = $row['Loai'];
        $_SESSION['email'] = $email;
      }
      header('Location:../index.php');
    }
  }
?>
