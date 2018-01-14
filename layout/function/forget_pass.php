<?php #Todo code here...
  include("layout/w_junior/header.php");
?>
 <div class="container">
  <div class="row">
    <div class="col-sm-5 col-md-5 col-lg-5 col-forget">
      <fieldset>
        <form class="form-register">
          <h3 class="text-center font-h2"><span ></span> QUÊN MẬT KHẨU</h3><hr>
          <div class="form-group">
            <label for="SDT">Số điện thoại</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập số điện thoại">
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu mới</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu mới">
          </div>
          <div class="form-group">
            <label for="cpwd">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="cpwd" placeholder="Nhập lại mật khẩu">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Đồng ý những <a href="#">chính sách & dịch vụ</a> của chúng tôi</label>
          </div>
          <button type="submit" class="btn btn-success btn-block">Xác nhận</button><br>
          <span class="text-center"> Nhấn nút xác nhận là đồng ý với những <a href="#">chính sách & dịch vụ</a> của chúng tôi</span>
          <hr>
          <p class="text-center col-lgi">Bạn đã là thanh viên?<a href="?page=login"> Đăng nhập</a></p>
          <p class="text-center col-regi">Bạn chưa là thanh viên?<a href="?page=register"> Đăng ký</a></p>
        </form>
      </fieldset>
    </div>
  </div>
 </div>
