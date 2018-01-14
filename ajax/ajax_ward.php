<?php
  include("../connect/dbconfig.php");
  $key_ward = $_POST['id_district'];
  $sqli_ward = "SELECT * FROM phuongxa WHERE FK_QH = '$key_ward'";
  $result_ward = mysqli_query($conn, $sqli_ward);
  echo "
    <select class='form-control' id='district'>
      <option>--- Phường/Xã ---</option>
    </select>
  ";
  while ($row = mysqli_fetch_array($result_ward)) { ?>
    <option value="<?php echo $row['MaPX']; ?>"><?php echo $row['TenPX']; ?></option>
  <?php
  }
?>
