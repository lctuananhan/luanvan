<?php session_start(); ?>
<style media="screen">
  .navbar {
    background-color: #2D2D30;
    font-family: arial !important;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #FAFAFA !important;

  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #2E2E2E !important;
    background-color: #D8D8D8 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #FAFAFA !important;
  }
  .navbar .navbar-header .navbar-brand img{
    margin-top: -7px;
  }
  .navbar-dropdown li a {
    color: #2E2E2E  !important;
  }
  .navbar-header a img {

  }
</style>
<?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="image/32.png" alt=""></a>
      </div>
      <!-- Navbar toggle -->
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?page=search_page"><span class="glyphicon glyphicon-search"></span> Tìm kiếm</a></li>

          <!-- Notification -->
          <li class="dropdown navabar">
            <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-list"></span> Admin</a>
            <ul class="dropdown-menu dropdown-menu-right navbar-dropdown">
              <li><a href="?page=admin_manage"><span class="glyphicon glyphicon-user"></span> Trang cá nhân</a></li>
              <li><a href="?page=admin_manage#admin_manage"><span class="glyphicon glyphicon-pencil"></span> Quản lý tin đăng</a></li>
              <li><a href="?page=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>

            </ul>
          </li>
          <!-- Manager -->
          <li><button type="button" name="button" class="btn btn-danger navbar-btn" onclick="window.location.href='?page=advertise'"> Đăng tin rao</button></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php else: ?>
    <?php if (isset($_SESSION['email']) && $_SESSION['email']):?>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="image/32.png" alt=""></a>
          </div>
          <!-- Navbar toggle -->
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="?page=search_page" ><span class="glyphicon glyphicon-search"></span> Tìm kiếm</a></li>

              <!-- Notification -->
              <li class="dropdown navabar">
                <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-list"></span> Quản lý</a>
                <ul class="dropdown-menu dropdown-menu-right navbar-dropdown">
                  <li><a href="?page=manage"><span class="glyphicon glyphicon-user"></span> Trang cá nhân</a></li>
                  <li><a href="?page=manage_post"><span class="glyphicon glyphicon-pencil"></span> Tin đăng</a></li>
                  <li><a href="?page=manage_profile"><span class="glyphicon glyphicon-info-sign"></span> <span> </span> Hồ sơ</a></li>
                  <li><a href="?page=file"><span class="glyphicon glyphicon-plus" ></span> Tạo hồ sơ</a></li>
                  <li><a href="?page=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>

                </ul>
              </li>
              <!-- Manager -->
              <li><button type="button" name="button" class="btn btn-danger navbar-btn" onclick="window.location.href='?page=advertise'"> Đăng tin rao</button></li>
            </ul>
          </div>
        </div>
      </nav>
    <?php else: ?>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
         <a class="navbar-brand" href="index.php"><img src="image/32.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="?page=search_page" >
                <span class="glyphicon glyphicon-search"></span> Tìm kiếm</a></li>
              <li><a href="?page=register"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
              <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <?php endif; ?>
<?php endif; ?>
