<style media="screen">
  .manage_profile{
    margin-top: 50px;
    padding: 10px;
  }
  .manage_profile h3 {
    color: #2E2E2E !important;
    font-weight: 600;
  }
  .manage_file {
    background-color: #fff !important;
  }
  .manage_profile label {
    font-weight: 100;
  }
  body {
    background-color: #f2f2f2;
  }
  .fileUpload {
      position: relative;
      overflow: hidden;

  }
  .fileUpload input.upload {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
  }
</style>
<?php include 'layout/w_junior/header.php'; ?>
<?php include 'handle/handle_manage_profile.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8 manage_file">

      <?php if (isset($id_profile)): ?>
        <div class="text-center manage_profile">
          <form class="form-horizontal" action="" method="post">
            <h3 >HỒ SƠ</h3><hr>
            <div class="form-group">
              <label class="control-label col-sm-2" for="">Họ và tên:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="" value="<?php echo $profile_name; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="">Sinh năm:</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="" value="<?php echo $profile_date; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="">Số điện thoại:</label>
              <div class="col-sm-4">
                <input type="tel" class="form-control" name="" value="<?php echo $profile_phone; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">  Việc làm:</label>
              <div class="col-sm-4">
                <!-- code php include select data from database-->
                <select class="form-control" id="manage_job" name="">
                  <option value="<?php echo $profile_id_job; ?>"><?php echo $profile_job; ?></option>
                  <option value="">--- Việc làm ---</option>
                  <?php include 'handle/handle_job.php'; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Tỉnh/Thành:</label>
              <div class="col-sm-4">
                <select class="form-control province" id="province" name="file_province">
                  <option value="<?php echo $profile_id_province; ?>"><?php echo $profile_province ?></option>
                  <option value="0">--- Tỉnh/Thành ---</option>
                  <?php include 'handle/handle_province.php'; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Quận/Huyện:</label>
              <div class="col-sm-4">
                <select class="form-control district" id="district" name="file_district">
                  <option value="<?php echo $profile_id_district; ?>"><?php echo $profile_district; ?></option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Phường/Xã:</label>
              <div class="col-sm-4">
                <select class="form-control ward" name="file_ward">
                  <option value="<?php echo $profile_id_ward ?>"><?php echo $profile_ward; ?></option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Địa chỉ:</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="file_num_house" placeholder="Số nhà" value="245/53">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <div class="col-sm-4">
                <select class="form-control street" name="file_street">
                  <option value="<?php echo $profile_id_street; ?>"> <?php echo $profile_street; ?></option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Mô tả thêm:</label>
              <div class="col-sm-8">
                  <textarea class="form-control" rows="8" id="comment" name="file_mota"><?php echo $profile_mota; ?></textarea>
              </div>
            </div>
          <!--  <div class="form-group">
              <label class="control-label col-sm-2">Hình ảnh:</label>
              <div class="col-sm-2">
                <div class="fileUpload btn btn-warning">
                  <span>Hình Ảnh</span>
                  <input id="my-file-selector" class="upload" type="file" name="file_anh" value="">
                </div>
                <div id="imagePreview"></div>
              </div>
            </div><hr>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-8 text-center btn-post" >
                <button type="submit" class="btn btn-primary btn-block" name="file_submit">Cập nhật</button>

              </div>
            </div> -->

          </form>
        </div>


        <?php else: ?>
        <h1 class="text-center" style="margin-top: 50px; margin-bottom: 335px;" >Hồ sơ của bạn chưa cập nhật...</h1>
      <?php endif; ?>

    </div>
    <div class="col-sm-2">

    </div>
  </div>
</div>
<script src="script/province.js"></script>
<script src="script/district.js"></script>
<script src="script/ward.js"></script>
<script src="script/imagePreview.js"></script>
