
<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {

        margin: 0 auto;
        height: 600px;
        width: 800px;
      }

</style>
  </head>
  <body>
  <div class="banner">
<div class="topnav">
<div class="text ttitle">
<a href="#">Pasahero</a>
</div>
<div class="text nav ralign">
<a href="Frontpage.php">Home</a>
<?php echo $_SESSION['username'];?>
<a href="logout.php">Log Out</a>

</div>
</div>
 <div class="container">
    <h1>Welcome <?php echo $_SESSION['username'];?>!</h1>
                            <div class="banner">
                            <div class="topnav" style="background-color: none;">
                            <div class="text ttitle">
                            <a href="#" style="color: blue;">Travel Guide Features:</a>
                            </div>
                            <div class="text nav ralign">
                            <a href="Route.php" style="color: blue; padding-bottom: 20px;">Route Guide</a>
                            <a href="terminal.php" style="color: blue; padding-bottom: 20px;">Terminal Guide</a>
                            <a href="fare.php" style="color: blue; padding-bottom: 20px;">Fare Guide</a>
                            <a href="passengers.php" style="color: blue; padding-bottom: 20px;">Passenger Guide</a>
                            </div>
                            </div>
                            <br>  <br>  
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.406422, lng: 120.940506},
          zoom: 14,
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here .');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYpeeCSvvmRtnihFCE9qOUFBnAgswQvJs&callback=initMap">
    </script>
    
  </body>
</html>