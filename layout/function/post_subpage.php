<?php include 'layout/w_junior/header.php';?>
<?php include 'handle/handle_post_subpage.php'; ?>
<div class="container">
      <!-- Portfolio Item Heading -->
      <h1 class="my-4" style="margin-top: 50px;">
        <small>Việc Tìm Người</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-7">
          <?php echo "<img class='subpage_anh' src='$post_sub_src' alt='' height='400px' width='650px'>"; ?>
        </div>

        <div class="col-md-5">
          <h3 class="my-3">Liên hệ</h3>
          <p>SĐT: <?php echo $post_sub_phone; ?> </p>
          <p>Địa chỉ: <?php echo $post_street.' '.$post_ward.' '. $post_district.' '. $post_province; ?> </p>

          <h3 class="my-3">Thông tin</h3>
          <p>Công việc: <?php echo $post_job; ?> </p>
          <p>Thời gian: <?php echo  $post_sub_time; ?> </p>
          <form class="" action="" method="post">
            <button type="submit" class="btn btn-danger" name="post_accept" >Duyệt tin</button>
          </form>

        </div>

      </div>
      <div class="row">

        <div class="col-sm-8">
          <h3>Mô tả</h3>
          <p> <?php echo $post_sub_info; ?>
          </p>

        </div>
      </div>
      <?php
      if (isset($_POST['post_accept'])) {
          # code...
          $post_accept_id = $_GET['post_id'];
          $post_accept_sql = "UPDATE post SET post_Check = 1 WHERE post_ID = '$post_accept_id'";
          mysqli_query($conn, $post_accept_sql);
          echo "<script>history.go(-2);</script>";
        }
      ?>

</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1711367032241582';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
