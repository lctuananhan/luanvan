<style media="screen">
  h1{
    margin-top: 100px;
  }
  .search {
    display: inline-block;
    text-align: center;
    margin: auto;
    margin-top: 50px;
    background-color: #fff;
  }

  body {
    background-color: #f2f2f2;
  }
.search_img {
  height: 100px;
  width: 150px;
}
.col-sm-8 .page_search hr {
  border-color: #f2f2f2 !important;
}
.page_search {
  background-color: #fff;
  margin-top: 50px;


}
.view_search {
  padding: 10px;
}
.search_per_img {
  border-radius: 50%;
  height: 150px;
  width: 150px;
  padding: 10px;

}
.per_content {
  margin-top: 20px;

}
.form_search {
  background-color: #fff !important;
  padding: 10px;
  margin-bottom: 10px;
}
</style>
<?php include 'layout/w_junior/header.php'; ?>
<div class="container">
  <div class="row">
  </div>
  <div class="row ">
    <div class="col-sm-4 search">

      <form class="form_search" action="" method="post" role="form" data-spy="affix" data-offset-top="197">
        <h3 class="text-center" >TÌM KIẾM NHANH</h3>
        <hr>
        <div class="form-group">
          <select class="form-control" name="search_type" required>
            <option value="">--- Hình thức ---</option>
            <option value="1">Việc tìm người</option>
            <option value="2">Người tìm việc</option>
          </select>
        </div>

        <div class="form-group">
          <select class="form-control" name="search_job" required>
            <option value="">--- Việc làm ---</option>
            <?php include 'handle/handle_job.php'; ?>
          </select>
        </div>

        <div class="form-group">
          <select class="form-control province"  name="search_province" required>
            <option value="">--- Tỉnh/Thành ---</option>
            <?php include 'handle/handle_province.php'; ?>
          </select>
        </div>

        <div class="form-group">
          <select class="form-control district"  name="search_district" required>
            <option value="">--- Quận/Huyện ---</option>
          </select>
        </div>

        <div class="form-group">
          <select class="form-control ward" name="search_ward" required>
            <option value="">--- Phường/Xã ---</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" class="form-control btn btn-success" name="search_submit" value="Tìm kiếm">
        </div>

      </form>
    </div><!-- ./div col-sm-4-->
    <div class="col-sm-8 page_search">

      <?php
          include 'connect/dbconfig.php';
          if (isset($_POST['search_submit'])) {
            $search_job = $_POST['search_job'];
            $search_province = $_POST['search_province'];
            $search_district = $_POST['search_district'];
            $search_ward = $_POST['search_ward'];
            if ($_POST['search_type'] == 1) {
                $search_sql = "SELECT * FROM post WHERE post.fk_Job = $search_job
                                                  AND post.fk_TT = $search_province
                                                  AND post.fk_QH = $search_district
                                                  AND post.fk_PX = $search_ward
                                                  AND post.post_Check = 1";
                $search_result = mysqli_query($conn, $search_sql);
                while ($search_row = mysqli_fetch_array($search_result)) {
                  # code...
                  $name = $search_row['post_Name'];
                  $search_src = "uploads/".$search_row['post_Image'];
                  $search_time = $search_row['post_time'];
                  $search_cost = $search_row['post_Cost'];
                  $job_id = $search_row['post_ID']


      ?>

          <div class="col-sm-12 view_search">
            <div class="col-sm-3">
              <?php echo "<img class='search_img' src='$search_src'>"; ?>
            </div>
            <div class="col-sm-9">
              <h4><?php echo "<a href='?page=job_subpage&job_id={$job_id}'>$name</a>"; ?></h4>
              <p> <small>Thời gian:</small> <?php echo $search_time; ?></p>
              <p> <small>Giá:</small> <?php echo $search_cost; ?></p>
            </div>
          </div>
          <hr>
      <?php
        }
      }
      ?>
        <?php
           if($_POST['search_type'] == 2){

             $search_sql = "SELECT * FROM profile_jobseekers,job, tinhthanh WHERE profile_jobseekers.fk_job = $search_job
                                                                  AND profile_jobseekers.fk_tinh = $search_province
                                                                  AND profile_jobseekers.fk_quan = $search_district
                                                                  AND profile_jobseekers.fk_phuong = $search_ward
                                                                  AND profile_jobseekers.fk_tinh = tinhthanh.MaTT
                                                                  AND profile_jobseekers.fk_job = job.Id_Job
                                                                  AND profile_jobseekers.profile_check = 1";
             $search_result = mysqli_query($conn, $search_sql);
             while ($search_row = mysqli_fetch_array($search_result)) {
               # code...
               $name = $search_row['profile_name'];
               $src = "uploads/".$search_row['profile_anh'];
               $person_id = $search_row['Ma_profile'];
               $per_job = $search_row['Name_Job'];
               $per_province = $search_row['TenTT'];
               ?>
               <div class="">
                 <div class="col-lg-4 col-sm-6 text-center mb-4">
                   <?php echo "<img class='search_per_img' src='$src'>"; ?>
                   <h4><?php echo "<a href='?page=person_subpage&person_id={$person_id}'>$name</a>"; ?></h4>
                   <p><?php echo $per_job; ?> | <?php echo $per_province ?></p>
                 </div>
                <!-- <div class="col-sm-2">

                 </div>
                <div class="col-sm-10 per_content">

                </div> -->
               </div>



      <?php
            }
          }
        }
      ?>
    </div>


  </div><!-- ./div row -->

</div>
<script src="script/province.js"></script>
<script src="script/district.js"></script>
