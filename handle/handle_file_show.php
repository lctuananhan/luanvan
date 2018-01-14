<?php
  include 'connect/dbconfig.php';
  $file_sql_show = "SELECT * FROM job, profile_jobseekers WHERE profile_jobseekers.fk_job = job.Id_Job
                                                          AND profile_jobseekers.profile_check = 0";
  $file_result_show = mysqli_query($conn, $file_sql_show);

?>
