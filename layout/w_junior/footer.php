<style media="screen">
footer {
  background-color: #2d2d30;
  opacity: 0.9;
}
.container-fluid .bg-grey h2{

}
.info_website {
  margin-top: 20px;
}
.container-fluid .bg-grey p{

  color: #fff !important;
}
.upper {
  display: block;
  margin: auto;
  margin-bottom: 5px;
  padding: 5px 10px;
  color: #00688B !important;
  font-size: 20px;
}
.matching {
  padding: 5px 5px 5px 5px;
  background-color: #2d2d30;
}
.matching h6 {
  color: #fff;
  font-family:arial;
  font-size: 20px;
  font-style: normal;
}
hr {
  border-color: #e6e6e6 !important;
}
</style>
<footer class="container-fluid">

  <div class="container bg-grey">
    <a href="#"></a>
    <div class="row">
      <div class="col-sm-5 info_website">
        <p>Liên hệ với chúng tôi và chúng tôi sẽ trả lời bạn trong vòng 24h</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> 268 Lý Thường Kiệt P.14 Q.10 Tp. Hồ Chí Minh</p>
        <p><span class="glyphicon glyphicon-phone"></span> (+84) 1228718779</p>
        <p><span class="glyphicon glyphicon-envelope"></span> lctuananh@gmail.com</p>
        <p><span class="glyphicon glyphicon-copyright-mark"></span><a href="https://www.facebook.com/lenguyenhaiphong"> Lê Anh</a></p>
      </div>
      <div class="col-sm-7 matching">
        <form action="handle/handle_matching.php" method="post">
          <h6 class="text-center">NHẬN VIỆC QUA EMAIL</h6><hr>
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email_matching" placeholder="Email" type="email" required>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control" name="job">
              <option value="">--- Việc làm ---</option>
              <?php include 'handle/handle_job.php'; ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 form-group">
            <select class="form-control province" name="province">
              <option value="">--- Tỉnh/Thành ---</option>
              <?php include 'handle/handle_province.php'; ?>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control district" name="district">
              <option value="">--- Quận/Huyện ---</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-danger pull-right btn-sm" type="submit" name="matching">Xác nhận</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</footer>
<script src="script/province.js"></script>
