<style media="screen">
  .circle {
    display: block;
    margin: 0 auto;
    margin-top: 50px;
    border-radius: 50%;
    height: 150px;
    width: 150px;


  }

  .text {
    margin-top: 50px;
  }
  .text a:link {
    text-decoration: none;
  }
  #map {
    width:100%;
    height:700px;
    margin-top: 0px;

  }
  .book {
    margin-top: 50px;
  }
  .book label {
    font-weight: 400;
    color: #2E2E2E !important;
  }
  #data {
    width: 100%;
  }
  .book_img {
    border-radius: 50%;

  }
  .callbook {
    display: inline-block;
    margin: 0 auto;
    border: 0.2px solid #f2f2f2;
    padding: 5px;
    background-color: #fff;
    width: 50%;

  }
  body {
    background-color: #f2f2f2;
  }
.info_total {
    background-color: #fff !important;
    padding: 10px;
  }
.modal-title{
  font-family: arial;
  font-weight: 600;
}



</style>
<?php
include 'layout/w_junior/header.php';
include 'layout/function/profile.php';
include 'handle/handle_profile_show.php';
include 'handle/handle_avatar.php';
//include 'ajax/ajax_book.php';
?>
<div class="container-fluid">
  <div class="row info_total">

      <div class="col-sm-2">
          <?php if ( isset($_SESSION['avatar_name'])): ?>

            <?php echo "<img src='$image_src' class='image-circle circle'  >"; ?>
            <?php else: ?>
            <img src="image/user_default.jpg" class="image-circle circle"  alt="Cinque Terre">
          <?php endif; ?>

      </div>
      <div class="col-sm-4 text">
        <?php if (isset($_SESSION['show_name']) && isset($_SESSION['show_phone']) && isset($_SESSION['show_address'])): ?>
            <p>Họ và tên:<?php echo "<span style='font-weight:bold;'> ".$show_name."</span>"; ?> </p>
            <p>Số điện thoại:<?php echo "<span> ".$show_phone."</span>"; ?> </p>
            <p>Email:<?php echo "<span> ".$_SESSION['email']."</span>"; ?> </p>
            <p>Địa chỉ:<?php echo "<span> ".$show_address."</span>"; ?></p>
            <a href="" data-toggle="modal" data-target="#profile">Cập nhật</a><span>&nbsp;</span>

          <?php else: ?>
            <p>Họ và tên:<span style="font-style: italic;"> Chưa cập nhật...</span> </p>
            <p>Số điện thoại:<span style="font-style: italic;"> Chưa cập nhật...</span> </p>
            <p>Email: <?php echo "<span> ".$_SESSION['email']."</span>"; ?> </p>
            <p>Địa chỉ:<span style="font-style: italic;"> Chưa cập nhật...</span></p>
            <a href="#" data-toggle="modal" data-target="#profile">Cập nhật</a>

        <?php endif; ?>

    </div>

    <div class="col-sm-6 text-center book">
      <form class="form-horizontal" id="book_form" method="post">
      <!--  <div class="form-group">
          <label class="control-label col-sm-2" for="">Địa chỉ</label>
          <div class="col-sm-8">
            <input type="hidden" class="form-control" name="" id="value" value="" >
          </div>
        </div> -->

        <div class="form-group">
          <label class="control-label col-sm-2" for="">Việc làm</label>
          <div class="col-sm-8">
            <select class="form-control book_job" id="book_job" name="book_job">
              <option value="">--- Việc làm ---</option>
              <?php include 'handle/handle_job.php'; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <span class="col-sm-2"></span>
          <div class="col-sm-8">
            <button type="button" class="btn btn-success btn-block" id="book"  name="book"> Book</button>
          </div>
        </div>


      </form>




      <div class="">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8 text-center">
            <div id="data">  </div>
        </div>
      </div>



    </div>
  </div>


  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" id="close" class="close"  data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">BOOK</h4>
          </div>
          <div class="modal-body text-center" id="modalBody">

          </div>
          <div class="modal-footer">
           <button type="button"  class="btn btn-success btn-sm btn-block" onclick="myReload()" >Accept</button>
          </div>
        </div>

      </div>
    </div>



  <div class="row">
      <div id="map" style=""></div>
  </div>
</div>

<script>

function myMap() {
  var image = "image/snow.png";
  var user_book = "image/pedestrian.png";

  map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 10.839778, lng: 106.638368},
        zoom: 11
      });
      infoWindow = new google.maps.InfoWindow;
      // Try HTML5 geolocation.
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
        /*  infoWindow.setPosition(pos);
          infoWindow.setContent('Location found.');
          infoWindow.open(map);
          map.setCenter(pos);*/

          //var job = $("#book_job").val();
          var lat = position.coords.latitude;
          var lng = position.coords.longitude;
          var infowincontent = document.createElement('div');
          var text = document.createElement('text');
          text.textContent = "Vị trí của bạn."
          infowincontent.appendChild(text);
         var marker = new google.maps.Marker({
            position:pos,
            map: map,
            icon: image,
            animation:google.maps.Animation.BOUNCE
          });
         marker.addListener('click', function(){
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
          });
        //  marker.setMap(map);
          $("#book").click(function(){
            $('#modalBody').empty();
            $('#data').empty();
            var job = $("#book_job").val();
            $.ajax({
                  url:"ajax/ajax_book.php",
                  type: "POST",
                  data:{lat: lat, lng: lng, job: job},
                  dataType:'json',
                  success: function(data){
                   //window.location.href="conn.php";
                  var json = data;
                  var htmlText = '';

                    //return data;
                  //document.getElementById("data").innerHTML = data;
                  for (var i = 0; i < json.length; i++) {
                     //document.getElementById("data").innerHTML = data[i];
                     var term = json[i],
                          latLng = new google.maps.LatLng(term.lat, term.lng);

                      // Creating a marker and putting it on the map
                      var infoBookWincontent = document.createElement('div');
                      var bookStrong = document.createElement('strong');
                      bookStrong.textContent = term.name;
                      infoBookWincontent.appendChild(bookStrong);
                      infoBookWincontent.appendChild(document.createElement('br'));
                      var bookText = document.createElement('text');
                      bookText.textContent = term.phone;
                      infoBookWincontent.appendChild(bookText);
                     var markers = new google.maps.Marker({
                        position: latLng,
                        map: map

                      });
                      markers.addListener('click', function(){
                         infoWindow.setContent(infoBookWincontent);
                         infoWindow.open(map, markers);
                       });
                    }
                    for(var key in data) {
                      //htmlText += '<div id="myModal">';
                      htmlText += '<img class = "book_img" src = '+ data[key].src+' width=100px height=100px>' + '<br>';
                      htmlText += '<a href="?page=person_subpage&person_id= '+ data[key].id +'" class="p-name">' + data[key].name + '</a>' + '<br>';
                      htmlText +=  data[key].phone;
                      //htmlText += '</div>'
                    }
                    $('#myModal').modal('show');
                    $('#modalBody').append(htmlText);

                  //  markers.setMap(map);
                //  document.getElementById("data").innerHTML = data;
                  //document.getElementById("data").innerHTML = data;

                  document.getElementById("book_form").reset();


                },
                error: function () {
                  var htmlText= '<div class="alert alert-danger"><strong>Chú ý!</strong> Bạn chưa chọn việc làm.</div>';
                  document.getElementById("data").innerHTML = htmlText;
                  document.getElementById("data").reset();
                  //alert('Bạn vui lòng chọn việc làm');
                  //location.reload();
                }

            });

          });


        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });


      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }

}


    function doNothing() {}
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuXzQdrNytPjoYtu2vqOZSQL962QTyV4Q&callback=myMap&&getLocation"></script>
<script type="text/javascript">
function myReload(){
  location.reload();
}
</script>
