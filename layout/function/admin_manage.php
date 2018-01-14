<style media="screen">
  .admin  {
    margin-top: 50px;
    padding: 10px;
  }
  .sub_admin {
    margin-top: 50px;
    padding: 10px;
  }
  .admin_circle {
    display: block;
    border-radius: 50%;
    height: 150px;
    width: 150px;

  }
  .admin_change {
    margin-top: 50px;
    padding: 10px;
  }
.file_images {
    display: block;
    border-radius: 50%;
    height: 100px;
    width: 100px;
    margin: 0 auto;
  }
  #personjob {
    display: none;
  }
  #jobperson {
    display: none;
  }
  #ad_matching {
    display: none;
  }
  .post_img {
    height: 100px;
    width: 150px;
  }


</style>
<?php include 'layout/w_junior/header.php';
      include 'handle/handle_file_show.php';
      include 'handle/handle_post_show.php';
      include 'handle/handle_show_matching.php';
?>
<div class="container">
  <div class="row">
    <div class="col-sm-2 admin">
      <img src="image/admin2.jpg" alt="" class="image-circle admin_circle" >
    </div>
    <div class="col-sm-4 sub_admin">
      <h4>Lê Anh</h4>
      <p>Số điện thoại: <span>01228718779</span></p>
      <p>Email:<span>leanh@gmail.com</span></p>
      <p>Địa chỉ: <span>268 Lý Thường Kiệt P.14 Q.10 Tp.HCM</span></p>
    </div>
    <div class="col-sm-6 admin_change">
      <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for=""></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="" value="" placeholder="Họ và tên" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for=""></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="" value="" placeholder="Số điện thoại">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2" for=""></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="" value="" placeholder="Địa chỉ">
          </div>
        </div>
        <div class="form-group">
          <span class="col-sm-2"></span>
          <div class="col-sm-8">
            <label class="btn btn-warning" for="">
              <input id="my-file-selector" type="file" name="admin_image" value="" style="display:none;">
              Ảnh đại diện
            </label>
          </div>

        </div>
        <div class="form-group">
          <span class="col-sm-2"></span>
          <div class="col-sm-8">
            <button type="button" class="btn btn-primary btn-block" name="button"> Cập nhật</button>
          </div>
        </div>


      </form>
    </div>
  </div><br>
  <div class="admin_post">
    <h2 id="admin_manage">Quản lý</h2>
    <form class="sendmail" action="handle/handle_sendmail.php" method="post">
    <button type="button" id="job" class="btn btn-primary">Việc tìm người</button>
    <button type="button" id="person" class="btn btn-primary">Người tìm việc</button>
    <button type="button" id="list_matching" class="btn btn-primary">Matching</button>
    <button type="submit" id="sendmail" class="btn btn-danger" name="sendmail">Send mail</button>
    </form>

    <hr>
  </div>
    <div id="jobperson">
      <?php
        while ($post_row = mysqli_fetch_array($post_result_show)) {
          $post_name_show = $post_row['post_Name'];
          $post_phone_show = $post_row['post_phone'];
          $post_image_name = $post_row['post_Image'];
          $post_src = "uploads/".$post_image_name;
          $post_job_show = $post_row['Name_Job'];
          $post_time_show = $post_row['post_time'];
          $post_id = $post_row['post_ID'];
          ?>
          <div class="row">
            <div class="col-md-2">
              <?php echo "<img class='post_img' src='$post_src'>"; ?>
            </div>
            <div class="col-md-10">
              <h4> <?php echo "<a href='?page=post_subpage&post_id={$post_id}'>{$post_name_show}</a>"; ?></h4>
              <p><?php echo $post_phone_show; ?></p>
              <p><?php echo $post_job_show. " | ". $post_time_show; ?></p>
            </div>
          </div><hr>

      <?php
        }
      ?>
    </div>
    <div id="personjob">
      <?php
          while ($file_row = mysqli_fetch_array($file_result_show) ){
          # code...
          $file_name_show = $file_row['profile_name'];
          $file_phone_show = $file_row['profile_phone'];
          $file_job = $file_row['Name_Job'];
          $file_anh = $file_row['profile_anh'];
          $file_fk_person = $file_row['fk_person'];
          $file_image_src = "uploads/".$file_anh;
          $file_id = $file_row['Ma_profile'];
      ?>
          <div class="row">
            <div class="col-md-2">
              <?php echo "<img class='file_images' src='$file_image_src' alt=''>"; ?>
            </div>
            <div class="col-md-10">
              <h4>
                <?php
                  echo "<a href='?page=admin_subpage&id={$file_id}'>{$file_name_show}</a>";
                ?>
              </h4>
              <p><?php echo $file_phone_show;?></p>
              <p><?php echo $file_job; ?></p>
            </div>
          </div><hr>
        <?php }?>
    </div>
    <div id="ad_matching">
      <table class="table">
        <thead>
          <tr>
            <th>Email</th>
            <th>Việc làm</th>
            <th>Tỉnh thành</th>
            <th>Quận huyện</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row_match = mysqli_fetch_array($result_matching)) {
              $match_email = $row_match['email'];
              $match_job = $row_match['Name_Job'];
              $match_tt = $row_match['TenTT'];
              $match_qh = $row_match['TenQH'];
            ?>
          <tr>
              <td><?php echo $match_email; ?></td>
              <td><?php echo $match_job; ?></td>
              <td><?php echo $match_tt; ?></td>
              <td><?php echo $match_qh; ?></td>
          </tr>
          <?php
          }
        ?>
        </tbody>
      </table>
    </div>

</div>

<script>
$(document).ready(function(){
    $("#person").click(function(){
        $("#personjob").slideDown("slow");
        $("#jobperson").slideUp("slow");
        $("#ad_matching").slideUp("slow");
    });
    $("#job").click(function(){
        $("#personjob").slideUp("slow");
        $("#ad_matching").slideUp("slow");
        $("#jobperson").slideDown("slow");
    });
    $("#list_matching").click(function(){
      $("#personjob").slideUp("slow");
      $("#ad_matching").slideDown("slow");
      $("#jobperson").slideUp("slow");
    });
});
</script>
