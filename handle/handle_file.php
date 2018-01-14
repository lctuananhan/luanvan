<?php
  session_start();
  include '../connect/dbconfig.php'; ?>
<?php
  $file_name = $_POST['file_name'];
  $file_date = $_POST['file_date'];
  $file_phone = $_POST['file_phone'];

  $file_job = $_POST['file_job'];
  $file_province = $_POST['file_province'];
  $file_district = $_POST['file_district'];
  $file_ward = $_POST['file_ward'];
  $file_street = $_POST['file_street'];
  #$file_num_house = $_POST['file_num_house'];
  $file_mota = $_POST['file_mota'];
  $file_person = $_SESSION['MaPer'];
  //$file_anh = $_POST['file_anh'];
  $file_anh_name = $_FILES["file_anh"]["name"];
  $file_target_dir = '../uploads/';
  $file_target_file = $file_target_dir . basename($_FILES["file_anh"]["name"]);

  if (isset($_POST['file_submit'])) {
    $file_query = "INSERT INTO images(name,Fk_person) values('".$file_anh_name."', '$file_person')";
    #mysqli_query($conn,$file_query);
    // Upload file

    # code...
    $file_sql = "INSERT INTO profile_jobseekers
                  (profile_name, profile_date, profile_phone, profile_mota,
                    fk_job, fk_tinh, fk_quan, fk_phuong, fk_duong, fk_person, profile_anh
                  )
                VALUES (
                  '$file_name', '$file_date','$file_phone','$file_mota',
                  '$file_job', '$file_province', '$file_district', '$file_ward',
                  '$file_street', '$file_person', '".$file_anh_name."'
                )";
      move_uploaded_file($_FILES['file_anh']['tmp_name'],$file_target_dir.$file_anh_name);
    if ($conn->query($file_sql) == TRUE) {
      # code...
      echo "<script> history.go(-2);</script>";
    }
    else {
      # code...
      echo "Error: ". $file_sql . "<br>". $conn->error;
    }
  }


?>
