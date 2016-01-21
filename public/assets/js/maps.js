function initMap(Lat, Lng) {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: -34.397, lng: 150.644}
       });
  var geocoder = new google.maps.Geocoder();

  document.getElementById('setMap').addEventListener('click', function() {
    geocodeAddress(geocoder, map);
  });



}

function geocodeAddress(geocoder, resultsMap) {
  var address = document.getElementById('address').value;
  geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      resultsMap.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: resultsMap,
   	 animation: google.maps.Animation.DROP,
        position: results[0].geometry.location
      });

      // Si on recu un resultat
     var lon = results[0].geometry.location.lng;
     var lat = results[0].geometry.location.lat;

     // Mettre lat et lon dans des hidden

    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });

}