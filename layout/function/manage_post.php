<style media="screen">
body{
  background-color: #f2f2f2;
}
  .quanly {
    background-color: #fff;
    margin-top: 50px;
    margin-bottom: 280px;

  }
  .job-img {
    height: 100px;
    width: 150px;
  }

</style>
<?php include 'layout/w_junior/header.php'; ?>
<?php include 'handle/handle_manage_post.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <!-- Todo code here... -->
    </div>
    <div class="col-sm-8 quanly">
      <h1 class="text-center">Quản lý tin đăng</h1> <hr>
      <?php
          while ($row = mysqli_fetch_array($job_result)) {
            # code...
              $id = $row['post_ID'];
              $name = $row['post_Name'];
              $src = "uploads/".$row['post_Image'];
              $cost = $row['post_Cost'];
              $time = $row['post_time'];
            ?>
            <div class="row quanly2">
              <div class="col-sm-3">
                <a href="#">
                  <?php echo "<img class='job-img' src='$src'>"; ?>
                </a>
              </div>
              <div class="col-sm-9">
                <h4><?php echo "<a href='?page=job_subpage&job_id={$id}'> $name </a>"; ?></h4>
                <p> <small>Giá: </small> <?php echo $cost; ?> VND</p>
                <p> <small>Thời gian: </small> <?php echo $time; ?></p>
              </div>
            </div><hr>



         <?php } ?>


    </div>
    <div class="col-sm-2">
      <!-- Todo code here... -->
    </div>

  </div>
</div>
