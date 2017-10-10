<!DOCTYPE html>
<html>
<head>
	<title>TMapa ni Mar</title>
	<style>
		#map {
			height: 300px;
			width: 90%;
			align-self: center;	
		}
	</style>
</head>
<body>
<h1>Cavite Map</h1>
	<div id="map"></div>
	<script type="text/javascript">
		function initMap() {
			//map option
			var options = {
				zoom:10,
				center: { lat: 14.218377, lng: 120.881195}
			}
			//new map
			var map = new google.maps.Map(document.getElementById('map'), options);
			//listen for click on map
			google.maps.event.addListener(map,'mouseup',
		function(event){
			//add marker
			addMarker({coords:event.latLng});
		});
			/* //Add marker
			var marker = new google.maps.Marker({
				position:{lat:14.213864, lng: 120.646191},
				map:map,
				icon:'images/green.png'
			});
			var infoWindow = new google.maps.InfoWindow({
    content: "<h1>Ternate</h1>"
  });
			marker.addListener('click', function() {
      infoWindow.open(map,marker);
		}); */
		// Add Marker function
		var markers = [
			{
				coords:{ lat:14.213864, lng: 120.646191},
				iconImage: 'images/green.png',
				content:'<h1>Pico de loro</h1>'
			},
			{
				coords:{lat:14.115286, lng: 120.962116},
				content:'<h1>tagaytay</h1>'
			},
			{
				coords:{lat:14.266998, lng: 120.628978},
						content:'<h1>ternate</h1>'
			}
		];
		//loop trough marker
		for (var i = 0; i < markers.length; i++) {
			//add markers
			addMarker(markers[i]);
		}
		//add marker function
			function addMarker (props){
				var marker = new google.maps.Marker({
					position: props.coords,
					map: map,
					//icon:props.iconImage
				});
				//check for costomicon
				if(props.iconImage){
					//set icon images
					marker.setIcon(props.iconImage);
				}
				//check content
				if (props.content){
					var infoWindow = new google.maps.InfoWindow({
		    content:props.content
		  });
					marker.addListener('click', function() {
		      infoWindow.open(map,marker);
				});
				}
			}
	}
  	</script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq2YkYi029TWyFY0KZoQpCGy-bgkqe3ME&callback=initMap"></script>
</body>
</html>
