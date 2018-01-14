<style media="screen">

.imageThumb {
height: 150px;
width: 150px;
border: 0px solid;
margin: 10px 10px 0 0;
padding: 1px;
}
.col-advertise {
  background-color:#fff ;
  float: none;
  margin-top: 50px !important;
  margin: 0px auto;
}
.col-advertise label {
  color: #2E2E2E  !important;
  font-weight: 500;
}
.btn-post button {
   margin-top: 20px;
}
.btn-post p {
   color: #2E2E2E !important;
   margin-top: 10px;
   margin-bottom: 50px;
}
.col-advertise h3 {
  font-family: arial;
  color: #2E2E2E !important;
  font-weight: 600;
}
body {
  background-color: #f2f2f2;
}
hr {
  border-color: #e6e6e6 !important;
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
<?php #Todo code here...
  include("layout/w_junior/header.php");
?>
<div class="container">
 <div class="row">
   <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-advertise">
     <fieldset>
     <h3 class="text-center"><span></span> HỒ SƠ</h3><hr>
       <form class="form-horizontal" action="handle/handle_file.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label col-sm-2" for="">Họ và tên:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="file_name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Sinh năm:</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="file_date">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Số điện thoại:</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="file_phone">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">  Việc làm:</label>
          <div class="col-sm-4">
            <!-- code php include select data from database-->
            <select class="form-control" name="file_job">
              <option>--- Việc làm ---</option>
              <?php include 'handle/handle_job.php'; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Tỉnh/Thành:</label>
          <div class="col-sm-4">
            <select class="form-control province" id="province" name="file_province">
              <option value="0">--- Tỉnh/Thành ---</option>
              <?php include 'handle/handle_province.php'; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Quận/Huyện:</label>
          <div class="col-sm-4">
            <select class="form-control district" id="district" name="file_district">
              <option value="0">--- Quận/Huyện ---</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Phường/Xã:</label>
          <div class="col-sm-4">
            <select class="form-control ward" name="file_ward">
              <option value="0">--- Phường/Xã ---</option>

            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Địa chỉ:</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="file_num_house" placeholder="Số nhà">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-4">
            <select class="form-control street" name="file_street">
              <option value="0">--- Đường ---</option>

            </select>
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-2">Mô tả thêm:</label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="8" id="comment" name="file_mota" placeholder="Mô tả thêm... "></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Hình ảnh:</label>
          <div class="col-sm-8">
            <div class="fileUpload btn btn-warning">
              <span>Hình Ảnh</span>
              <input id="my-file-selector" class="upload" type="file" name="file_anh" value="">
            </div>
            <div id="imagePreview"></div><!-- Preview image -->
          </div>
        </div><hr>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8 text-center btn-post" >
            <button type="submit" class="btn btn-primary btn-block" name="file_submit">Tạo hồ sơ</button>
            <p class="text-center">* Hồ sẽ được duyệt, cập nhật và hiển thị trong vòng 24h</p>
          </div>
        </div>
      </form>
     </fieldset>
   </div>
 </div>
</div>
<script src="script/province.js"></script>
<script src="script/district.js"></script>
<script src="script/ward.js"></script>
<script src="script/imagePreview.js"></script>
