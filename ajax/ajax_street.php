<?php
  include("../connect/dbconfig.php");
  $key_street = $_POST['id_ward'];
  $sqli_street = "SELECT * FROM duong WHERE FK_PX = '$key_street'";
  $result_street = mysqli_query($conn, $sqli_street);
  echo "
    <select class='form-control' id='district'>
      <option>--- Đường ---</option>
    </select>
  ";
  while ($row = mysqli_fetch_array($result_street)) { ?>
    <option value="<?php echo $row['MaD']; ?>"><?php echo $row['TenD']; ?></option>
  <?php
  }
?>
