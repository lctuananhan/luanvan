<style media="screen">
body{
  background-color: #F2F2F2;
}
input[type="file"] {

display:block;
}
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
     <h3 class="text-center"><span></span> ĐĂNG TIN RAO</h3><hr>
       <form class="form-horizontal" action="handle/handle_post.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label col-sm-2" for="">Tiêu đề:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="post_name" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Việc làm:</label>
          <div class="col-sm-4">
            <select class="form-control" name="post_job">
              <option>--- Việc làm ---</option>
              <?php include 'handle/handle_job.php'; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Tỉnh/Thành:</label>
          <div class="col-sm-4">
            <select class="form-control province" id="province" name="post_province">
              <option value="0">--- Tỉnh/Thành ---</option>
              <?php include 'handle/handle_province.php'; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Quận/Huyện:</label>
          <div class="col-sm-4">
            <select class="form-control district" id="district" name="post_district">
              <option value="0">--- Quận/Huyện ---</option>

            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Phường/Xã:</label>
          <div class="col-sm-4">
            <select class="form-control ward" name="post_ward">
              <option>--- Phường/Xã ---</option>

            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Địa chỉ:</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" placeholder="Số nhà">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-4">
            <select class="form-control street" name="post_street">
              <option>--- Đường ---</option>

            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Số điện thoại:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="post_phone" placeholder="Nhập số điện thoại">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Ngày làm:</label>
          <div class="col-sm-3">
            <input type="date" class="form-control" name="post_date">
          </div>
        </div>
      
        <div class="form-group">
          <label class="control-label col-sm-2">Giờ làm:</label>
          <div class="col-sm-3">
            <input type="time" class="form-control" name="post_time">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Giờ kết thúc:</label>
          <div class="col-sm-3">
            <input type="time" class="form-control" name="post_time_end">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Giá:</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="post_cost" placeholder="Giá được tính theo đơn vị VNĐ">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Mô tả thêm:</label>
          <div class="col-sm-8">
            <textarea class="form-control" name="post_direc" rows="8" id="comment" placeholder="Mô tả thêm... "></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Hình ảnh:</label>
          <div class="col-sm-8">
            <div class="fileUpload btn btn-warning">
              <span>Hình Ảnh</span>
              <input id="my-file-selector" class="upload" type="file" name="post_image" value="">
            </div>
            <div id="imagePreview"></div><!-- Preview image -->
          </div>
        </div><hr>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8 text-center btn-post" >
            <button type="submit" class="btn btn-primary btn-block" name="post_submit">Đăng tin</button>
            <p class="text-center">* Tin đăng sẽ được duyệt và hiển thị trong vòng 24h</p>
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
