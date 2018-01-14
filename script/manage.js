function myMap() {

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
            animation:google.maps.Animation.BOUNCE
          });
          marker.addListener('click', function(){
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
          });
          marker.setMap(map);
          $("#book").click(function(){
            var job = $("#book_job").val();
            $.ajax({
                  url:"ajax/ajax_book.php",
                  type: "POST",
                  data:{lat: lat, lng: lng, job: job},
                  success: function(data){
                   //window.location.href="conn.php";
                    //var h = data;

                    document.getElementById("data").innerHTML = data;
                    document.getElementById("book_form").reset();

                  },
                  error:function(){
                      alert("error");
                  }
            });
          });
          //return pos;
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });


      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }

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


    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }
