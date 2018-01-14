<?php
include 'connect/dbconfig.php';
$Fk_person = $_SESSION['MaPer'];
$sql = "SELECT * FROM images WHERE Fk_person = '$Fk_person'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
  # code...
  $avatar_name = $row['name'];
  $_SESSION['avatar_name'] = $avatar_name;
}
if (isset($avatar_name)) {
  # code...
  $image_src = "uploads/".$avatar_name;
}

?>
