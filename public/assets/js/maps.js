function initMap(geocoder, resultsMap) {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: {lat: 43.296, lng: 5.3697}
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

    
    var lat = results[0].geometry.location.lat();
    var lon = results[0].geometry.location.lng();
      // Si on recu un resultat
    document.getElementById('lat').value = lat;
    document.getElementById('lon').value = lon;
   
  


    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });



}