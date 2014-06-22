var map = null;
var geocoder = null;
var from;
var to;
var directionsPanel = null;
var directions = null;

function initialize() {
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(-30.068640, -51.150034)
    };

    map = new google.maps.Map(document.getElementById('loadGmap'),
            mapOptions);

    geocoder = new GClientGeocoder();
    map.addControl(new GSmallMapControl());
    map.addControl(new GMapTypeControl());
}

function gerarRota(from, to) {
    if (geocoder) {
        geocoder.getLatLng(from,
                function(point) {
                    if (!point) {
                        alert(from + " não encontrado");
                    }
                }
        );
        geocoder.getLatLng(to,
                function(point) {
                    if (!point) {
                        alert(to + " não encontrado");
                    }
                }
        );

        var string = "from: " + from + " to: " + to;
        directions.clear();
        directions.load(string);
        GEvent.addListener(directions, "error", erroGetRoute);
    } else {
        alert("GeoCoder não identificado");
    }
}

function erroGetRoute() {
    alert("Não foi possivel traçar a rota de: " + from + " para: " + to);
}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
      'callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;
