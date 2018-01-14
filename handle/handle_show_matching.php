<?php
include 'connect/dbconfig.php';
$sql_matching = "SELECT * FROM matching, job, tinhthanh, quanhuyen WHERE matching.fk_job = job.Id_Job
AND matching.fk_tt = tinhthanh.MaTT AND matching.fk_qh = quanhuyen.MaQH";
$result_matching = mysqli_query($conn, $sql_matching);
?>
