
<?php
  include 'connect/dbconfig.php';
  $id_per = $_SESSION['MaPer'];
  if(isset($id_per)){
    $query = "SELECT * FROM profile_jobseekers, job, tinhthanh, quanhuyen, phuongxa ,duong WHERE profile_jobseekers.fk_person = $id_per
    AND profile_jobseekers.fk_job = job.Id_Job
    AND profile_jobseekers.fk_tinh = tinhthanh.MaTT
    AND profile_jobseekers.fk_quan = quanhuyen.MaQH
    AND profile_jobseekers.fk_phuong = phuongxa.MaPX
    AND profile_jobseekers.fk_duong = duong.MaD";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $id_profile = $row['Ma_profile'];
    $profile_name = $row['profile_name'];
    $profile_phone = $row['profile_phone'];
    $profile_date = $row['profile_date'];
    $profile_mota = $row['profile_mota'];
    $profile_job = $row['Name_Job'];
    $profile_id_job = $row['Id_Job'];
    $profile_province = $row['TenTT'];
    $profile_id_province = $row['MaTT'];
    $profile_id_district = $row['MaQH'];
    $profile_district = $row['TenQH'];
    $profile_id_ward = $row['MaPX'];
    $profile_ward = $row['TenPX'];
    $profile_id_street = $row['MaD'];
    $profile_street = $row['TenD'];
  }
 ?>
