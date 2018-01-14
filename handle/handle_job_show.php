<?php
  include 'connect/dbconfig.php';
  $job_sql = "SELECT * FROM post WHERE post_Check = 1 ";
  $job_result = mysqli_query($conn, $job_sql);
 ?>
