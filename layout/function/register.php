<style media="screen">
  body{
    background-color: #f2f2f2;
  }
  .col-register {
    background-color:#fff;
    float: none;
    margin-top: 50px !important;
    margin: 0px auto;
  }
  .col-register p {
    color: #2E2E2E !important;
    margin-top: 30px;
    margin-bottom: 30px;
  }
  .col-register label {
    color: #2E2E2E !important;
    font-weight: 500;
  }
  .col-register h3 {
    font-family: arial;
    color: #2E2E2E !important;
    font-weight: 600;
  }
hr {
  border-color: #e6e6e6 !important;
}
</style>
<?php include("layout/w_junior/header.php");?>
<div class="container">
 <div class="row">
   <div class="col-sm-5 col-md-5 col-lg-5 col-register">
     <fieldset>
       <form method="post" class="form-register" action="handle/handle_register.php">
         <h3 class="text-center font-h2"><span ></span> ĐĂNG KÝ</h3><hr>

         <div class="form-group">
           <label for="email">Email hoặc Phone</label>
           <input type="text" class="form-control" id="email" name="re_email" placeholder="Nhập email hoặc số điện thoại" required>
         </div>
         <div class="form-group">
           <label for="pwd">Mật khẩu</label>
           <input type="password" class="form-control" id="re_pass" name="re_pass" placeholder="Nhập mật khẩu" required>
         </div>
         <div class="form-group">
           <label for="cpwd">Xác nhận mật khẩu</label>
           <input type="password" class="form-control" id="re_cpass" name="re_cpass" placeholder="Nhập lại mật khẩu" required>
         </div>
         <div class="checkbox">
           <label><input type="checkbox"> Đồng ý những <a href="#">chính sách & dịch vụ</a> của chúng tôi</label>
         </div>
         <button type="submit" class="btn btn-warning btn-block" name="register">Đăng ký</button><br>
         <hr>
         <p class="text-center">Bạn đã là thanh viên?<a href="?page=login"> Đăng nhập</a></p>
       </form>
     </fieldset>
   </div>
 </div>
</div>
