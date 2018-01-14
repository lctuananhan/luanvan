<style media="screen">
@media (min-width: 992px) {
  body {
    padding-top: 40px;
  }
}

.pagination {
margin-bottom: 15px;
}
.job-img {
  height: 100px;
  width: 150px;
}
.content {
  background-color: #fff !important;
  margin-top: 10px;
}
.content  {
  color: #2d2d30;
  opacity: 0.9;
}
.content hr {
  border-color: #e6e6e6 !important;

}
body {
  background-color: #f2f2f2;
}

</style>
<?php
  include("layout/w_junior/header.php");
  include 'handle/handle_job_show.php';
?>
<div class="container">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8 content">

      <h3 class="my-4 text-center">
        VIỆC TÌM NGƯỜI
      </h3>
      <p class="text-center">Trang thông tin rao vặt, tìm việc làm, người làm việc phổ thông uy tín, chất lượng. <br>
      Thông tin việc làm, người làm việc được cập nhật nhanh trong vòng 24h. Hãy làm việc liền tay nhận ngay tiền mặt.</p><hr>

      <?php
        while ($job_row = mysqli_fetch_array($job_result)) {
          # code...
          $job_name = $job_row['post_Name'];
          $job_time = $job_row['post_time'];
          $job_cost = $job_row['post_Cost'];
          $job_src = "uploads/".$job_row['post_Image'];
          $job_id = $job_row['post_ID'];

        ?>

      <!-- Project One -->
      <div class="row">
        <div class="col-sm-3">
          <a href="#">
            <?php echo "<img class='job-img' src='$job_src'>"; ?>
          </a>
        </div>
        <div class="col-sm-9">
          <h4><?php echo "<a href='?page=job_subpage&job_id={$job_id}'> $job_name </a>"; ?></h4>
          <p> <small>Giá: </small> <?php echo $job_cost; ?> VND</p>
          <p> <small>Thời gian: </small> <?php echo $job_time; ?></p>
        </div>
      </div>
      <!-- /.row -->

      <hr>
      <?php
      }
      ?>
      <!-- Project Two -->

      <!-- Pagination -->
      <div class="text-center">
        <ul class="pagination pagination-sm text-center">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
      </ul>
      </div>





    </div>
    <div class="col-sm-2">

    </div>
  </div>
      <!-- Page Heading -->

    </div>
