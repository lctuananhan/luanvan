<style media="screen">

.jumbotron {
  background-image: url("image/cleanhouse.jpg");
  /*background-color: #1C1C1C;*/
  color: white !important;
  font-family: arial;
  min-height: 300px;
  /* Position and center the image to scale nicely on all screens */
  background-position: top;
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: 50px;

}
/* Jumbotron */
.jumbotron h1 {
  color: white !important;
}
.jumbotron p {
  color: white !important;
  font-family: arial;
}
/* Button Circle */
.col-cata {
  margin-top: 40px;
}
.show {
  display: block;
  margin: 0 auto;
  border-radius: 50%;
  background-color:  #00688B ;
  height: 150px;
  width: 150px;
  background-position: center;
  padding: 20px 15px;
  opacity: 0.85;
}
.show1 {
  display: block;
  margin: 0 auto;
  border-radius: 50%;
  background-color: #54C571;
  height: 150px;
  width: 150px;
  background-position: center;
  padding: 20px 15px;
  opacity: 0.85;
}
.show2 {
  display: block;
  margin: 0 auto;
  border-radius: 50%;
  background-color: #8B0000;
  height: 150px;
  width: 150px;
  background-position: center;
  padding: 20px 15px;
  opacity: 0.85;
}
.show a:link {
  text-decoration: none;
}
.show1 a:link {
  text-decoration: none;
}
.show2 a:link {
  text-decoration: none;
}


.category a.job h4 {
  color: #FAFAFA !important;
  font-family: arial;

}
.category a.jobseeker h4 {
  color: #FAFAFA !important;
  font-family: arial;

}
.category a.writen {
  color:  #FAFAFA !important;
  font-family: arial;

}
.category a.job:hover {
  color:  !important;

}
.category a.jobseeker:hover {
  color: #FAFAFA !important;
}
.category a.writen:hover {
  color: #FAFAFA  !important;
}
.logo-small1 {
  color: #FAFAFA;
  font-size: 40px;
}
.logo-small2 {
  color: #FAFAFA;
  font-size: 40px;
}
.logo-small3 {
  color: #FAFAFA;
  font-size: 40px;
}
@media screen and (max-width: 768px) {
 .col-sm-4 {
   text-align: center;
   margin: 25px 0;
 }
}
.carousel-inner  img {

  filter: grayscale(0%);

}
#myCarousel {
  margin-top: 0px;
  background-color: #F5EFFB;
}
.carousel-inner .item img {

}
.carousel-inner .item a h3 {
  color: #FAFAFA;
  font-size: 30px;
  font-weight: 500;
}
.carousel-inner .item a:hover {
  color: #FAFAFA !important;

}
.carousel-inner  .caption h3 {
  color: #fff !important;
  font-family: arial;
  font-size: 40px;
  font-weight: 100;
  margin-bottom: 60px;
}
.caption
{
  position:absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 5;
  padding-top: 5px;
  padding-bottom: 15px;
  color: #fff;
  text-align: center;
  /*background: rgba(0,0,0,0.4);*/
}
.carousel-indicators
{
  bottom: -5px;
}
.carousel-indicators i {
  border-radius:50% !important;
  display: inline-block;
  color: #fff;
  font-size: 30px !important;
  border: 1px solid #fff;
  height: 30px;
  width: 30px;
  margin-top: 5px;

}
.carousel-indicators li
{
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -9px;
  cursor: pointer;
  background-color: #000\9;
  background-color: rgba(0,0,0,0);
  border: 1px solid #fff;
  border-radius: 50%;
}
.carousel-indicators .active
{
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
#danhmuc {
  margin-top: 10px;


 }
 body {
   background-color: #d8d8d8;
 }
 .category {
  margin-bottom: 200px;
 }
 @media screen and (max-width: 768px) {
  .col-sm-4 {
    width: 100%;
  }
  .category {
    text-align: center;
    margin-bottom: 5px;
  }
 }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li><br>
    <a href="#map"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
  </ol>

<div class="carousel-caption category">




  <div class="row text-center">
    <div class="col-sm-4">
      <div class="show">
        <a href="?page=job" class="job">
          <span class="glyphicon glyphicon-wrench logo-small1"></span>
          <h4>VIỆC TÌM NGƯỜI</h4>
        </a>
      </div>
    </div>

    <div class="col-sm-4 ">
      <div class="show1">
        <a href="?page=person" class="jobseeker">
          <span class="glyphicon glyphicon-user logo-small2"></span>
          <h4>NGƯỜI TÌM VIỆC</h4>
        </a>

      </div>
    </div>

    <div class="col-sm-4 ">
      <div class="show2">
        <a href="?page=advertise" class="writen">
          <span class="glyphicon glyphicon-pencil logo-small3"></span>
          <h4>ĐĂNG TIN RAO</h4>
        </a>

      </div>
    </div>

  </div>










</div>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="image/how.jpg"  class="img-responsive" alt="" style="width:100%; height:650px;">
      <div class="carousel-caption caption">

      <!--  <h3>Dọn dẹp căn hộ</h3>
        <p>Cần dọn dẹp căn hộ 268 Lý Thường Kiệt p.16 Q.10</p> -->
      </div>
    </div>

    <div class="item">
      <img src="image/clearner.jpg" alt="" class="img-responsive " style="width:100%; height:650px;">
      <div class="carousel-caption caption">

      <!--  <h3>Chuyển nhà</h3>
        <p>Cần chuyển phòng tại 315 Cao Thắng</p> -->
      </div>
    </div>

    <div class="item">
      <img src="image/clearning.jpg" alt="" class="img-responsive" style="width:100%; height:650px;">
      <div class="carousel-caption caption">

    <!--    <h3>Sơn nhà</h3>
        <p>Gia đình chúng tôi cần sơn lại nhà đường Điện Biên Phủ</p>-->
      </div>
    </div>

  </div>
  <!-- Left and right controls -->
</div>


<!-- danh muc
<div id="danhmuc">
<div class="container ">
  <h3 class="text-center">DANH MỤC </h3>


  <div class="row col-cata text-center">
    <div class="col-sm-4">
      <div class="show">
        <a href="?page=job" class="job">
          <span class="glyphicon glyphicon-wrench logo-small1"></span>
          <h4>VIỆC TÌM NGƯỜI</h4>
        </a>
      </div>
    </div>

    <div class="col-sm-4 ">
      <div class="show1">
        <a href="?page=person" class="jobseeker">
          <span class="glyphicon glyphicon-user logo-small2"></span>
          <h4>NGƯỜI TÌM VIỆC</h4>
        </a>

      </div>
    </div>

    <div class="col-sm-4 ">
      <div class="show2">
        <a href="?page=advertise" class="writen">
          <span class="glyphicon glyphicon-pencil logo-small3"></span>
          <h4>ĐĂNG TIN RAO</h4>
        </a>

      </div>
    </div>

  </div>
</div>
</div>
 -->



<div class="container">

</div>
<!-- Map Google API-->

<div id="map" style="width:100%;height:700px;"></div>

<script src=""></script>

<script >
function myMap() {
  var myLatLng = {lat: 10.7838, lng: 106.703};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'BCONLINE'
  });
  var infoWindow = new google.maps.InfoWindow;
  downloadUrl('handle/marker.php', function(data){
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName('marker');
    Array.prototype.forEach.call(markers,function(markerElem){
      var id = markerElem.getAttribute('id_profile');
      var name = markerElem.getAttribute('name_person');
      var province = markerElem.getAttribute('name_province');
      var district = markerElem.getAttribute('name_district');
      var ward = markerElem.getAttribute('name_ward');
      var street = markerElem.getAttribute('name_street');
      var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));
      var infowincontent = document.createElement('div');
      var strong = document.createElement('strong');
      strong.textContent = name
      infowincontent.appendChild(strong);
      infowincontent.appendChild(document.createElement('br'));

      var text = document.createElement('text');
      text.textContent = street + ' ' + ward + ' ' + district + ' ' + province
      infowincontent.appendChild(text);

      var marker = new google.maps.Marker({
        map:map,
        position: point,
        title: 'BCONLINE'
      });
      marker.addListener('click', function(){
        infoWindow.setContent(infowincontent);
        infoWindow.open(map, marker);
      });
    });
  });
}
function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuXzQdrNytPjoYtu2vqOZSQL962QTyV4Q&callback=myMap" ></script>
