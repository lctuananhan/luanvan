<?php
  include 'connect/dbconfig.php';
  $p_sub_id = $_GET['person_id'];
  $person_sub_sql = "SELECT * FROM profile_jobseekers, tinhthanh, quanhuyen, phuongxa, duong, person, job
                              WHERE profile_jobseekers.fk_person = person.MaPer
                              AND profile_jobseekers.fk_job = job.Id_Job
                              AND profile_jobseekers.fk_tinh = tinhthanh.MaTT
                              AND profile_jobseekers.fk_quan = quanhuyen.MaQH
                              AND profile_jobseekers.fk_phuong = phuongxa.MaPX
                              AND profile_jobseekers.fk_duong  = duong.MaD
                              AND '$p_sub_id' = profile_jobseekers.Ma_profile";
  $person_sub_result = mysqli_query($conn, $person_sub_sql);

  while ($person_sub_row = mysqli_fetch_array($person_sub_result)) {
    # code...
    $person_sub_name = $person_sub_row['profile_name'];
    $person_sub_info = $person_sub_row['profile_mota'];
    $person_sub_src = "uploads/".$person_sub_row['profile_anh'];
    $person_sub_email = $person_sub_row['Email'];
    $person_sub_phone = $person_sub_row['profile_phone'];
    $person_sub_job = $person_sub_row['Name_Job'];
    $person_street = $person_sub_row['TenD'];
    $person_ward = $person_sub_row['TenPX'];
    $person_district = $person_sub_row['TenQH'];
    $person_province = $person_sub_row['TenTT'];
  }
 ?>
