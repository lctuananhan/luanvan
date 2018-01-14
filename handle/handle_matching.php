<?php
  include '../connect/dbconfig.php';

  if (isset($_POST['matching'])) {
    # code...
    $email_matching = $_POST['email_matching'];
    $job = $_POST['job'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sql = "INSERT INTO matching(email, fk_job, fk_tt, fk_qh) VALUES ('$email_matching', '$job', '$province', '$district')";
    if ($conn->query($sql) == TRUE) {
      # code...
      echo "<script> alert('Chúng tôi sẽ gửi mail cho bạn việc làm bạn cần'); history.back(); </script>";

    } else {

      echo "<script> alert('Có lỗi xảy ra'); </script>";
    }
  }

?>
