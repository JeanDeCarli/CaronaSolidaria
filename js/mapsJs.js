function initialize() {
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(-30.068640, -51.150034)
  };

  var map = new google.maps.Map(document.getElementById('loadGmap'),
      mapOptions);
}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
      'callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;