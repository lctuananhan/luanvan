<?php
  include("connect/dbconfig.php");
  $sql = "SELECT * FROM tinhthanh";
  $query = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($query)) { ?>
  <option value="<?php echo $row['MaTT'];?>"><?php echo $row['TenTT'];?></option>
  <?php
  }
?>
