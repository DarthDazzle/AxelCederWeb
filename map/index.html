<?php
include('../header.php');
include('function.php');
// settings
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Axel Ceder</title>
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />
	<script type="text/javascript">
		var map;
		var minZoomLevel = 11;
		function initMap() {
			var map = new google.maps.Map(document.getElementById("map"), {
				center: new google.maps.LatLng(59.329655, 18.068580),
				zoom: minZoomLevel,
				mapTypeId: 'roadmap',
				disableDefaultUI: true
			});
			var bikeLayer = new google.maps.BicyclingLayer();
			bikeLayer.setMap(map);
			google.maps.event.addListener(map, 'zoom_changed', function () {
				if (map.getZoom() < minZoomLevel) map.setZoom(minZoomLevel);
			});
			   // Bounds for North America
			var strictBounds = new google.maps.LatLngBounds(
			new google.maps.LatLng(59.249033, 17.796135), 
			new google.maps.LatLng(59.452754, 18.235588)
			);

			// Listen for the dragend event
			google.maps.event.addListener(map, 'center_changed', function() {
				if (strictBounds.contains(map.getCenter())) return;

				// We're out of bounds - Move the map back within the bounds

				var c = map.getCenter(),
				x = c.lng(),
				y = c.lat(),
				maxX = strictBounds.getNorthEast().lng(),
				maxY = strictBounds.getNorthEast().lat(),
				minX = strictBounds.getSouthWest().lng(),
				minY = strictBounds.getSouthWest().lat();

				if (x < minX) x = minX;
				if (x > maxX) x = maxX;
				if (y < minY) y = minY;
				if (y > maxY) y = maxY;

				map.setCenter(new google.maps.LatLng(y, x));
			});
   
			downloadUrl("parse.php", function(data) {
				var xml = data.responseXML;
				var markers = xml.documentElement.getElementsByTagName("marker");
				for (var i = 0; i < markers.length; i++) {
					var id = markers[i].getAttribute("id");
					var address = markers[i].getAttribute("location");
					var comment = markers[i].getAttribute("comment");
					var time = markers[i].getAttribute("time");
					var plate = markers[i].getAttribute("plate");
					var point = new google.maps.LatLng(
					parseFloat(markers[i].getAttribute("lat")),
					parseFloat(markers[i].getAttribute("lng")));
					var html = "<b>#" + id + " at:" + time + "</b> <br/>" + address +"<br/>" + comment;
					var icon = 'http://labs.google.com/ridefinder/images/mm_20_blue.png';
					var marker = new google.maps.Marker({
						map: map,
						position: point,
						icon: icon.icon
					});
					bindInfoWindow(marker, map, infoWindow, id, address, comment, time, plate);
				}
			});
			document.getElementById("map").style.marginLeft = "25vw";
			var infoWindow = new google.maps.InfoWindow;
		}	

	function bindInfoWindow(marker, map, infoWindow, id, adress, comment, time, plate) {
		google.maps.event.addListener(marker, 'click', function() {
			$("#commentbox").text(comment);
			$("#image").attr("src","imgs/" + id + ".jpg");
			$("#box").show();
			$("#regbox").text(plate);
			map.setCenter(marker.position);
		});
	}	
		
	function downloadUrl(url,callback) {
		var request = window.ActiveXObject ?
		new ActiveXObject('Microsoft.XMLHTTP') :
		new XMLHttpRequest;

		request.onreadystatechange = function() {
			if (request.readyState == 4) {
				callback(request, request.status);
			}
		};

		request.open('GET', url, true);
		request.send(null);
	}
	
	// Limit the zoom level

	 
	
	</script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwqbDL9WLWkFHc71xAiHlCOcIU2lNnyJ0&callback=initMap" async defer></script>
	<script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
</head>

<body>
<div id="mySidenav" class="sidenav">
<form action="getfile.php" method="post"><br>
Type (or select) Filename: <input type="file" name="uploadFile">
<input type="submit" value="Upload File">
</form>
<div id="box">
	<div id="regbox">ASD 830
	</div>
	<div id="imagebox">
	<img id="image"></img>
	</div>
	<div id="commentbox">
	</div>
	</div>
</div>

</div>
<div id="map"></div>

</body>
</html>