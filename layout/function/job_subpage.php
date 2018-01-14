<style media="screen">
  body {
    background-color: #f2f2f2;
  }
  .subpage {
    background-color: #fff;
  }
.my-3 {
  border: 0.5px solid #E6E6E6 ;
  padding: 10px;
  width: 375px;
}
.description {
  margin-top: 20px;
  border: 0.5px solid #E6E6E6 ;
  margin-bottom: 20px;
  width: 755px;
  margin-left: 10px;
}
.sub_img {


}
</style>
<?php include 'layout/w_junior/header.php'; ?>
<?php include 'handle/handle_job_subpage.php'; ?>
<div class="container subpage">

      <!-- Portfolio Item Heading -->
      <h2 class="my-4" style="margin-top: 60px;">
        <?php echo $job_sub_name; ?>
      </h2>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8 sub_img">
          <?php echo "<img class='subpage_anh' src='$job_sub_sr' alt='' height='450px' width='750px'>"; ?>
        </div>

        <div class="col-md-4 my-3">
          <h3>Liên hệ</h3>
          <p>SĐT: <?php echo $job_sub_phone; ?> </p>
          <p>Địa chỉ: <?php echo $job_sub_street.' '.$job_sub_ward.' '.$job_sub_district.' '.$job_sub_province; ?> </p>

          <h3>Thông tin</h3>
          <p>Công việc: <?php echo $job_sub_job; ?> </p>
          <p>Giá: <?php echo $job_sub_cost; ?> <span>VNĐ</span> </p>
          <p>Ngày thực hiện: <?php echo $job_date; ?></p>
          <p>Giờ làm: <?php echo $job_sub_time; ?> - <?php echo $job_time_end; ?></p>

          <div class="fb-like" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
        </div>

      </div>
      <div class="row">

        <div class="col-sm-8 description">
          <h3>Mô tả</h3>
          <p><?php echo $job_sub_info; ?></p>

        </div>
      </div>
      <!-- /.row -->
      <!-- Related Projects Row -->
      <div class="fb-comments" data-width="755px" data-numposts="5"></div>
    </div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1711367032241582';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1711367032241582';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
