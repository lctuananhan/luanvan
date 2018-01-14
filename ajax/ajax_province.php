<?php
  include("../connect/dbconfig.php");
  $key = $_POST['id_province'];
  $sqli = "SELECT * FROM quanhuyen WHERE FK_TT = '$key'";
  $result = mysqli_query($conn, $sqli);
  echo "
    <select class='form-control district' id='district'>
      <option>--- Quận/Huyện ---</option>
    </select>
  ";
  while ($row = mysqli_fetch_array($result)) { ?>
    <option value="<?php echo $row['MaQH']; ?>"><?php echo $row['TenQH']; ?></option>
  <?php
  }
?>
