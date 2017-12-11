<div id="maps" class="maps">
  <div class="container container-fluid">
    <h4 class="text-center">Dimanakah Desa Tambaknegara?</h4>
    <div id="map"></div>
    <script>
      function initMap() {
        var tambaknegara = {lat: -7.5158067, lng: 109.1757973};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: tambaknegara
        });
        var marker = new google.maps.Marker({
          position: tambaknegara,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-_E-2mErEO2Eh4d0-IGfUlvlaDS2-UZM&callback=initMap">
    </script>
  </div>
</div>
