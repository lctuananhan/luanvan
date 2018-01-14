<style media="screen">


@media (min-width: 992px) {
    body {
        padding-top: 50px;
    }
}

.container .mx-auto {
  border-radius: 50%;
}
.person-image {
  height: 150px;
  width: 150px;
  border-radius: 50%;
}
.person {
  background-color: #fff;
}
body {
  background-color: #f2f2f2;
}
.mb-4 {
  padding: 10px;
}
</style>
<?php
  include("layout/w_junior/header.php");
  include 'handle/handle_person_show.php';
?>
<div class="container">
      <!-- Team Members Row -->
      <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8 person">
          <h3 class="my-4 text-center">NGƯỜI TÌM VIỆC</h3>
          <p class="text-center">Trang thông tin rao vặt, tìm việc làm, người làm việc phổ thông uy tín, chất lượng. <br>
          Thông tin việc làm, người làm việc được cập nhật nhanh trong vòng 24h. Hãy làm việc liền tay nhận ngay tiền mặt.</p><hr>

        <?php
          while ($person_row = mysqli_fetch_array($person_result_show)) {
            # code...
            $person_name = $person_row['profile_name'];
            $person_src = "uploads/".$person_row['profile_anh'];
            $person_id = $person_row['Ma_profile'];
            $person_job = $person_row['Name_Job'];
            $person_district = $person_row['TenQH'];
          ?>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <?php echo "<img class='person-image' src='$person_src'>"; ?>
            <h4><?php echo "<a href='?page=person_subpage&person_id={$person_id}'>$person_name</a>"; ?>
            </h4>
            <p><?php echo $person_job; ?> | <?php echo $person_district; ?></p>
          </div>
        <?php
          }
        ?>
      
          </div>
        <div class="col-sm-2">

        </div>
      </div>


  </div>
