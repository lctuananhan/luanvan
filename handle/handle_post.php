<?php
  session_start();
  include '../connect/dbconfig.php';
  $post_name = $_POST['post_name'];
  $post_cost = $_POST['post_cost'];
  $post_direc = $_POST['post_direc'];
  $post_image = $_FILES['post_image']['name'];
  $post_target_dir = "../uploads/";
  $post_job = $_POST['post_job'];
  $post_province = $_POST['post_province'];
  $post_district = $_POST['post_district'];
  $post_ward = $_POST['post_ward'];
  $post_street = $_POST['post_street'];
  $post_phone = $_POST['post_phone'];
  $post_time = $_POST['post_time'];
  $post_time_end = $_POST['post_time_end'];
  $post_date = $_POST['post_date'];
  #$post_date_end = $_POST['post_date_end'];


   if (isset($_POST['post_submit'])) {
     if (isset($_SESSION['MaPer'])) {
       $post_person = $_SESSION['MaPer'];
       # code...
       $post_sql = "INSERT INTO post(post_Name, post_Cost, post_Direc, post_Image,
                                      fk_Job, fk_TT, fk_QH, fk_PX, fk_Dg, post_phone, post_time, post_time_end, post_date, person)
                    VALUES ('$post_name', '$post_cost', '$post_direc','".$post_image."', '$post_job',
                            '$post_province', '$post_district', '$post_ward', '$post_street', '$post_phone', '$post_time','$post_time_end','$post_date', '$post_person')";

        move_uploaded_file($_FILES['post_image']['tmp_name'], $post_target_dir.$post_image);
        if ($conn->query($post_sql) == TRUE) {
          echo "<script> history.go(-2);</script>";
        }
        else {
          echo "Error: ". $post_sql . "<br>". $conn->error;
        }
     }
     else {

     $post_sql = "INSERT INTO post(post_Name, post_Cost, post_Direc, post_Image,
                                    fk_Job, fk_TT, fk_QH, fk_PX, fk_Dg, post_phone, post_time, post_time_end, post_date)
                  VALUES ('$post_name', '$post_cost', '$post_direc','".$post_image."', '$post_job',
                          '$post_province', '$post_district', '$post_ward', '$post_street', '$post_phone', '$post_time','$post_time_end','$post_date')";

      move_uploaded_file($_FILES['post_image']['tmp_name'], $post_target_dir.$post_image);
      if ($conn->query($post_sql) == TRUE) {
        echo "<script> history.go(-2);</script>";
      }
      else {
        echo "Error: ". $post_sql . "<br>". $conn->error;
      }
  }
}
?>
