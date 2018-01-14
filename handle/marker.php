<?php
  include '../connect/dbconfig.php';

  $dom = new DOMDocument("1.0");
  $node = $dom->createElement("markers");
  $parnode = $dom->appendChild($node);

  $query = "SELECT * FROM profile_jobseekers,tinhthanh, quanhuyen, phuongxa, duong WHERE profile_jobseekers.fk_tinh = tinhthanh.MaTT
                                                                                    AND profile_jobseekers.fk_quan = quanhuyen.MaQH
                                                                                    AND profile_jobseekers.fk_phuong = phuongxa.MaPX
                                                                                    AND profile_jobseekers.fk_duong = duong.MaD
                                                                                    AND profile_jobseekers.profile_check = 1";
  $result = mysqli_query($conn,$query);
  if (!$result) {
    die('Invalid query: ' . mysqli_error());
  }
  header("Content-type: text/xml");

  while ($row = mysqli_fetch_assoc($result)) {
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("id_profile",$row['Ma_profile']);
    $newnode->setAttribute("name_person", $row['profile_name']);
    $newnode->setAttribute("name_province", $row['TenTT']);
    $newnode->setAttribute("name_district", $row['TenQH']);
    $newnode->setAttribute("name_ward", $row['TenPX']);
    $newnode->setAttribute("name_street", $row['TenD']);
    $newnode->setAttribute("lat", $row['latitude']);
    $newnode->setAttribute("lng", $row['longitude']);
  }
  echo $dom->saveXML();
 ?>
