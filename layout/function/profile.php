<style media="screen">
  #profile_image {
    margin-top: 10px;
    height: 100px;
    width: 100px;
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
<div class="container">
  <div class="modal fade" id="profile" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

          <div class="modal-header" style="padding:10px 10px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="text-center"> THÔNG TIN CÁ NHÂN</h3>
          </div>

          <div class="modal-body" style="padding:40px 50px;">
            <form method="post" action="handle/handle_profile.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="profile_name" value="" placeholder="Nhập họ và tên" required>
              </div>
              <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" name="profile_phone" value="" placeholder="Nhập số điện thoại" required>
              </div>

              <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" name="profile_address" value="" placeholder="Nhập địa chỉ" required>
              </div>
              <div class="form-group ">
                <div class="fileUpload btn btn-warning">
                  <span>Hình Ảnh</span>
                  <input type="file" class="upload" name="file_img_name" value="">
                  <img id="profile_image" src="" alt="">
                </div>

              </div>
              <div class="form-group">
                <button type="submit" name="profile_submit" class="btn btn-primary btn-block"> Cập nhật</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">

          </div>
          <!-- Modal footer -->
        </div>
        <!-- Modal content -->
      </div>
      <!-- Modal fade -->
    </div>
<!-- Container -->
</div>
<script src="script/profile_preview.js"></script>
