<style media="screen">
.col-login {
  background-color:#fff ;
  float: none;
  margin-top: 50px !important;
  margin: 0px auto;

}
.col-call {
  margin-top: 30px;
  margin-bottom: 30px;
}

.col-login label {
  color:  #2E2E2E !important;
  font-weight: 500;
}
.col-login p {
  color:  #2E2E2E !important;
  font-weight: 500;
}
.col-login h3 {
  font-family: arial;
  color: #2E2E2E !important;
  font-weight: 600;
}
body{
  background-color: #f2f2f2;
}
hr {
  border-color: #e6e6e6 !important;
}
</style>
<?php include("layout/w_junior/header.php");?>
<div class="container">
 <div class="row">
   <div class="col-sm-5 col-md-5 col-lg-5 col-login">
     <fieldset>
       <form class="form-login" method="post" action="handle/handle_login.php">
         <h3 class="text-center"><span></span> ĐĂNG NHẬP</h3><hr>
         <div class="form-group">
           <label for="email">Email or Phone</label>
           <input type="text" class="form-control" id="login_email" name="login_email" placeholder="Nhập email hoặc số điện thoại" required>
         </div>
         <div class="form-group">
           <label for="pwd">Mật khẩu</label>
           <input type="password" class="form-control" id="login_pass" name="login_pass" placeholder="Nhập mật khẩu" required>
         </div>
         <div class="checkbox">
           <label><input type="checkbox"> Nhớ tài khoàn</label>
         </div>
         <button type="submit" class="btn btn-primary btn-block" name="login">Đăng nhập</button><br>
         <button type="button" class="btn btn-default btn-block" onclick="window.location.href='?page=forget_pass'">Quên mật khẩu</button><br>
         <hr>
         <?php if (isset($_SESSION['message']) && $_SESSION['message']): ?>
          <p class="text-center col-call">Bạn chưa là thanh viên?<a href="?page=register"> Đăng ký</a></p>
        <!--  <p class="text-center col-noti"><?php #echo "<span style='color: red;'>* ".$_SESSION['message']. "</span>"; ?></p> -->
          <div class="alert alert-danger">
            <?php echo $_SESSION['message'];  ?>
          </div>
            <?php unset($_SESSION['message']); ?>
          <?php else: ?>
          <p class="text-center col-call">Bạn chưa là thanh viên?<a href="?page=register"> Đăng ký</a></p>
         <?php endif; ?>
       </form>
     </fieldset>
   </div>
 </div>
</div>
