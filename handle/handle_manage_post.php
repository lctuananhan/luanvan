<?php
include 'connect/dbconfig.php';
$id_post = $_SESSION['MaPer'];
$job_sql = "SELECT * FROM post WHERE post_Check = 1 AND person = $id_post";
$job_result = mysqli_query($conn, $job_sql);

?>
