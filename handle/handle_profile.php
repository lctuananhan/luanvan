<?php
  session_start();
  include '../connect/dbconfig.php';
  #Bien thong tin ca nhan
  $profile_name = $_POST['profile_name'];
  $profile_phone = $_POST['profile_phone'];
  $profile_address = $_POST['profile_address'];
  $fk_person = $_SESSION['MaPer'];
  $email = $_SESSION['email'];
  $sql = "INSERT INTO users (Ten_users, SDT_users, Diachi_users, Fk_person) VALUES ('$profile_name', '$profile_phone', '$profile_address','$fk_person')";
  #Bien khai bao hinh anh
  $file_img_name = $_FILES["file_img_name"]["name"];
  $target_dir = '../uploads/';
  $target_file = $target_dir . basename($_FILES["file_img_name"]["name"]);
  #$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //$avatar_path = $mysqli->real_escape_string('uploads/'.$_FILES['avatar']['name']);
  # Valid file extensions
  #$extensions_arr = array("jpg","jpeg","png","gif");
  if (isset($_POST['profile_submit'])) {

     // Check extension
     #if( in_array($imageFileType,$extensions_arr) ){
      // Insert record
      $query = "INSERT INTO images(name,Fk_person) values('".$file_img_name."', $fk_person)";
      mysqli_query($conn,$query);
      // Upload file
      move_uploaded_file($_FILES['file_img_name']['tmp_name'],$target_dir.$file_img_name);
      //$_SESSION['file_img'] = $target_file;
      #}
    # code...
    if($conn->query($sql) == TRUE){
      echo "<script>history.back();</script>";
    }
    else {
      echo "Error: ". $sql . "<br>". $conn->error;
    }

}
 ?>
