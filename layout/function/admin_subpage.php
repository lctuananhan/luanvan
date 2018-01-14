<?php include 'layout/w_junior/header.php'; ?>
<?php include 'handle/handle_subpage_show.php'; ?>
<div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4" style="margin-top: 50px;">
        <small>Người Tìm Việc</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-7">
          <?php echo "<img class='subpage_anh' src='$subpage_src' alt='' height='400px' width='650px'>"; ?>
        </div>

        <div class="col-md-5">
          <h3 class="my-3">Liên hệ</h3>
          <p>Tên: <?php echo $subpage_name; ?> </p>
          <p>Email: <?php echo $subpage_email ?> </p>
          <p>SĐT: <?php echo $subpage_phone; ?></p>
          <p>Địa chỉ: <?php echo $subpage_street.' '. $subpage_wards.' '. $subpage_district.' '.$subpage_province; ?></p>

          <h3 class="my-3">Việc làm</h3>
          <p>Công việc: <?php echo $subpage_job; ?></p>
          <form class="" action="" method="post">
            <button type="submit" class="btn btn-danger" name="accept" >Duyệt tin</button>
          </form>

        </div>

      </div>
      <div class="row">

        <div class="col-sm-8">
          <h4>Mô tả</h4>
          <p><?php echo $subpage_mota ?>
          </p>

        </div>
      </div>
      <?php
        if (isset($_POST['accept'])) {
          # code...
          $accept_id = $_GET['id'];
          $accept_sql = "UPDATE profile_jobseekers SET profile_check = 1 WHERE Ma_profile = '$accept_id'";
          mysqli_query($conn, $accept_sql);
          echo "<script>history.go(-2);</script>";
        }
      ?>

      <!-- /.row -->

      <!-- Related Projects Row -->
    </div>
