<style media="screen">
  .person_sub_img{
    height: 450px;
    width: 750px;
  }
.per_sub {
  background-color: #fff;
}
.per_sub_img {
  margin-top: 70px;

}
.per_info {
  border: 0.5px solid #e6e6e6;
  width: 375px;
  padding: 10px;
}
body {
  background-color: #E6e6e6;
}
.per_descrip {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0.5px solid #e6e6e6;
  width: 755px;
  margin-left: 10px;
}
</style>
<?php include("layout/w_junior/header.php"); ?>
<?php include 'handle/handle_person_subpage.php'; ?>
<div class="container per_sub">

      <!-- Portfolio Item Heading -->


      <!-- Portfolio Item Row -->
      <div class="row  per_sub_img">

        <div class="col-md-8">
          <?php echo "<img class='person_sub_img' src='$person_sub_src'>";?>
        </div>

        <div class="col-md-4 per_info">
          <h3 class="my-3">Liên hệ</h3>
          <p>Tên: <?php echo $person_sub_name; ?></p>
          <p>Email: <?php echo $person_sub_email; ?></p>
          <p>SĐT: <?php echo $person_sub_phone; ?></p>
          <p>Địa chỉ: <?php echo $person_street.' '. $person_ward.' '. $person_district.' '. $person_province; ?></p>

          <h3 class="my-3">Việc làm</h3>
          <p>Công việc: <?php echo $person_sub_job; ?></p>

          <div class="fb-like" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

        </div>

      </div>
      <div class="row">
        <div class="col-sm-8 per_descrip">
          <h3>Mô tả</h3>
          <p><?php echo $person_sub_info; ?>
          </p>
        </div>
      </div>
      <div class="fb-comments" data-width="760px" data-numposts="5"></div>

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
