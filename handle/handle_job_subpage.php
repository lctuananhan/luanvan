<?php
  include 'connect/dbconfig.php';
  $job_sub_id = $_GET['job_id'];
  $job_sub_sql = "SELECT * FROM post, tinhthanh, quanhuyen, phuongxa, duong, job WHERE post.fk_Job = job.Id_job
                                                                                 AND   post.post_ID = '$job_sub_id'
                                                                                 AND   post.fk_TT = tinhthanh.MaTT
                                                                                 AND   post.fk_QH = quanhuyen.MaQH
                                                                                 AND   post.fk_PX = phuongxa.MaPX
                                                                                 AND   post.fk_Dg = duong.MaD";
  $job_sub_result = mysqli_query($conn, $job_sub_sql);
  while ($job_sub_row = mysqli_fetch_array($job_sub_result)) {
    # code...
    $job_sub_name = $job_sub_row['post_Name'];
    $job_sub_sr = "uploads/".$job_sub_row['post_Image'];
    $job_sub_info = $job_sub_row['post_Direc'];
    $job_sub_cost = $job_sub_row['post_Cost'];
    $job_sub_phone = $job_sub_row['post_phone'];
    $job_sub_job = $job_sub_row['Name_Job'];
    $job_sub_time = $job_sub_row['post_time'];
    $job_sub_province = $job_sub_row['TenTT'];
    $job_sub_district = $job_sub_row['TenQH'];
    $job_sub_ward = $job_sub_row['TenPX'];
    $job_sub_street = $job_sub_row['TenD'];
    $job_time_end = $job_sub_row['post_time_end'];
    $job_date = $job_sub_row['post_date'];
  //  $job_date_end = $job_sub_row['post_date_end'];

  }
 ?>
