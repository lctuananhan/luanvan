<?php
  /**
   *
   */
  class book {
    public $id;
    public $lat;
    public $lng;
    public $total;
  }
  class book_person {
    public $id;
    public $lat;
    public $lng;
    public $src;
    public $phone;
  }


 ?>
 <?php function distance($lat1, $lon1, $lat2, $lon2) {

    $pi80 = M_PI / 180;
    $lat1 *= $pi80;
    $lon1 *= $pi80;
    $lat2 *= $pi80;
    $lon2 *= $pi80;

    $r = 6372.797; // mean radius of Earth in km
    $dlat = $lat2 - $lat1;
    $dlon = $lon2 - $lon1;
    $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $km = $r * $c;

    //echo '<br/>'.$km;
    return $km;
}
?>
<?php
    include '../connect/dbconfig.php';
    # code...
    if (isset($_POST['job'])) {
      # code...
      $job = $_POST['job'];
      $lat = $_POST['lat'];
      $lng = $_POST['lng'];
      $arr = array();
      if ($job == '') {
        echo "<div class='alert alert-danger'>";
        echo "<strong>"."Chú ý!"."</strong>"." "."Bạn vui lòng chọn việc làm";
        echo "</div>";
      }
      else {
        $query = "SELECT * FROM profile_jobseekers, duong WHERE profile_jobseekers.fk_job = $job AND profile_jobseekers.fk_duong = duong.MaD ";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
          $book = new book();
          #$s_lat = $row['latitude'];
          #$s_lng = $row['longitude'];
          $book->lat = $row['latitude'] * 1;
          $book->lng = $row['longitude'] * 1;
          $book->id = $row['Ma_profile'];
          $book->total = distance($lat, $lng, $book->lat , $book->lng );
          array_push($arr, $book);
        }
        //echo json_encode($arr);
        # code...
        $find = array();
       foreach($arr as $value){
         $find[] = $value->total;
          $min = min($find);
        }
      $temp = array();
      foreach($arr as $value){
        if($value->total == $min){
          $book_query = "SELECT * FROM profile_jobseekers, duong WHERE profile_jobseekers.Ma_profile = $value->id AND profile_jobseekers.fk_duong = duong.MaD";
          $book_result = mysqli_query($conn, $book_query);
          while($book_row = mysqli_fetch_array($book_result)){
            $book_person = new book_person();
            $book_person->id = $book_row['Ma_profile'];
            $book_person->name = $book_row['profile_name'];
            $book_person->phone = $book_row['profile_phone'];
            $book_person->lat = $book_row['latitude'] * 1;
            $book_person->lng = $book_row['longitude'] * 1;
            $book_person->src = "uploads/".$book_row['profile_anh'];
            array_push($temp, $book_person);
          }
          echo json_encode($temp);
        }
      }
      /*  CODE BOOK
        foreach($arr as $value){
          #if($value->total == $find[0]){
            #echo  $value->id;
          #}
          if($value->total == $min){
            $book_query = "SELECT * FROM profile_jobseekers WHERE profile_jobseekers.Ma_profile = $value->id";
            $book_result = mysqli_query($conn, $book_query);
            while($book_row = mysqli_fetch_array($book_result)){
              $book_id = $book_row['Ma_profile'];
              $book_name = $book_row['profile_name'];
              $book_phone = $book_row['profile_phone'];
              $book_src = "uploads/".$book_row['profile_anh'];
            }

            echo "<div class='callbook'>";

            echo "<img class = 'book_img' src = {$book_src} width=50px height=50px>". "<br>";
            echo "<a href='?page=person_subpage&person_id={$book_id}'>".$book_name."</a>". "<br>". $book_phone;

            echo "</div>";

          }
        } */
        //echo json_encode($find);

      //  echo json_encode($arr);
      //  echo "<a href='#'>Ten</a>"."<br>".$book->id."<br>.$lat";
    }
  }

 ?>
