function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(10.793563, 106.707800),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
      var marker = new google.maps.Marker({
        position: LatLng,
        map: map,
        icon: iconBase + 'parking_lot_maps.png'
      });
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
