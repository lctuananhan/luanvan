<?php
  include 'connect/dbconfig.php';
  $post_sql_show = "SELECT * FROM job,post WHERE post.fk_job = job.Id_Job AND post.post_Check = 0";
  $post_result_show = mysqli_query($conn, $post_sql_show);
 ?>
