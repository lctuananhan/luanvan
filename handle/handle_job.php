<?php
  include 'connect/dbconfig.php';
  $job_sql = "SELECT * FROM job";
  $job_query = mysqli_query($conn, $job_sql);
  //echo "<option>--- Việc làm ---</option>";
  while ($job_row = mysqli_fetch_array($job_query)) { ?>

  <option value="<?php echo $job_row['Id_Job'];?>"><?php echo $job_row['Name_Job']; ?></option>
    <?php
  }
?>
