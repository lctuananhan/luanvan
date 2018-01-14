<?php
  $page_direction = isset($_GET["page"])? $_GET["page"]:"";
  if($page_direction == "register") {
    include("layout/function/register.php");
  }
  else if($page_direction == "login"){
    include("layout/function/login.php");
  }
  else if ($page_direction == "advertise"){
    include("layout/function/advertise.php");
  }
  else if ($page_direction == "forget_pass"){
    include("layout/function/forget_pass.php");
  }
  else if ($page_direction == "job"){
    include("layout/function/job.php");
  }
  else if ($page_direction == "person"){
    include("layout/function/person.php");
  }
  else if ($page_direction == "manage"){
    include("layout/function/manage.php");
  }
  else if ($page_direction == "admin_manage"){
    include("layout/function/admin_manage.php");
  }
  else if ($page_direction == "admin_subpage"){
    include("layout/function/admin_subpage.php");
  }
  else if ($page_direction == "post_subpage"){
    include("layout/function/post_subpage.php");
  }
  else if ($page_direction == "job_subpage"){
    include("layout/function/job_subpage.php");
  }
  else if ($page_direction == "person_subpage"){
    include("layout/function/person_subpage.php");
  }
  else if ($page_direction == "file"){
    include("layout/function/file.php");
  }
  else if ($page_direction == "show_job"){
    include("layout/function/show_job.php");
  }
  else if ($page_direction == "show_person"){
    include("layout/function/show_person.php");
  }
  else if ($page_direction == "logout"){
    include("handle/handle_logout.php");
  }
  else if ($page_direction == "search_page"){
    include("layout/function/search_page.php");
  }
  else if ($page_direction == "manage_profile"){
    include("layout/function/manage_profile.php");
  }
  else if ($page_direction == "manage_post"){
    include("layout/function/manage_post.php");
  }
  else {
    include("layout/home.php");
  }
?>
