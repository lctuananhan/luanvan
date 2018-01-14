<?php
  include 'connect/dbconfig.php';
  $post_id = $_GET['post_id'];
  $post_sql = "SELECT * FROM `post`, `tinhthanh`, `quanhuyen`, `phuongxa`,`duong`,`job` WHERE
                post.fk_TT = tinhthanh.MaTT
            AND post.fk_QH = quanhuyen.MaQH
            AND post.fk_PX = phuongxa.MaPX
            AND post.fk_Dg = duong.MaD
            AND post.fk_Job = job.Id_Job
            AND post.post_ID = '$post_id'";
  $post_result = mysqli_query($conn, $post_sql);
  while ($post_sub_row=mysqli_fetch_array($post_result)) {
    # code...
    $post_sub_name = $post_sub_row['post_Name'];
    $post_sub_phone = $post_sub_row['post_phone'];
    $post_sub_time = $post_sub_row['post_time'];
    $post_sub_info = $post_sub_row['post_Direc'];
    $post_sub_src = "uploads/".$post_sub_row['post_Image'];
    $post_province = $post_sub_row['TenTT'];
    $post_district = $post_sub_row['TenQH'];
    $post_ward = $post_sub_row['TenPX'];
    $post_street = $post_sub_row['TenD'];
    $post_job = $post_sub_row['Name_Job'];

  }
 ?>
