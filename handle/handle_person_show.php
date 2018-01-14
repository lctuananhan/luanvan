<?php
  include 'connect/dbconfig.php';

    $person_show = "SELECT * FROM job, profile_jobseekers, quanhuyen WHERE profile_jobseekers.fk_job = job.Id_Job
                                                            AND profile_jobseekers.fk_quan = quanhuyen.MaQH
                                                            AND profile_jobseekers.profile_check = 1";
    $person_result_show = mysqli_query($conn, $person_show);

?>
