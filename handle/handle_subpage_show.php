<?php
  include 'connect/dbconfig.php';
  $id = $_GET['id'];
  $subpage_sql = "SELECT * FROM `profile_jobseekers`, `tinhthanh`, `quanhuyen`, `phuongxa`,`duong`,`job`, `person` WHERE
  profile_jobseekers.fk_tinh = tinhthanh.MaTT
  AND profile_jobseekers.fk_person = person.MaPer
  AND profile_jobseekers.fk_quan = quanhuyen.MaQH
  AND profile_jobseekers.fk_phuong = phuongxa.MaPX
  AND profile_jobseekers.fk_duong = duong.MaD
  AND profile_jobseekers.fk_job = job.Id_Job
  AND profile_jobseekers.Ma_profile = '$id'";
  $subpage_results = mysqli_query($conn, $subpage_sql);
  while ($subpage_row = mysqli_fetch_array($subpage_results)) {
    # code...
    $subpage_name = $subpage_row['profile_name'];
    $subpage_phone = $subpage_row['profile_phone'];
    $subpage_province = $subpage_row['TenTT'];
    $subpage_district = $subpage_row['TenQH'];
    $subpage_wards = $subpage_row['TenPX'];
    $subpage_street = $subpage_row['TenD'];
    $subpage_job = $subpage_row['Name_Job'];
    $subpage_mota = $subpage_row['profile_mota'];
    $subpage_email = $subpage_row['Email'];
    $subpage_anh = $subpage_row['profile_anh'];
    $subpage_src = "uploads/".$subpage_anh;
  }
?>
