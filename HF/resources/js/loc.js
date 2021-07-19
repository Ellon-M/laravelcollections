let map;
function initMap() {
  map = new google.maps.Map( document.getElementById( 'map' ), {
    center: {
      lat: -1.2921,
		  lng: 36.8219
    },
    zoom: 14,
    scaleControl: true,
fullscreenControlOptions: {
position: google.maps.ControlPosition.RIGHT_BOTTOM
},
  });

  let marker = new google.maps.Marker({
  	position: {
    lat: -1.325374,
    lng: 36.7802036
  	},
  	map: map,
  	title: 'Me'
  });
  let infoWindow = new google.maps.InfoWindow({
  	content: '<h2>My location</h2>'
  });

  marker.addListener( 'click', function() {
  	infoWindow.open( map, marker );
  });
}

marker.setMap(map);
