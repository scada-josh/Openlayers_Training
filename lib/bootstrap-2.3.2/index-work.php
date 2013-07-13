<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="../../lib/bootstrap-2.3.2/css/bootstrap.min.css">
    <script src="../../lib/jquery-1.8.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="../../lib/OpenLayers-2.13/OpenLayers.js"></script>

    <script type="text/javascript">
        var lon = 5;
        var lat = 40;
        var zoom = 5;
        var map, layer;

        function init(){

            map = new OpenLayers.Map('map', {
                projection: 'EPSG:3857',
                layers: [
                new OpenLayers.Layer.Google(
                  "Google Streets", // the default
                  {numZoomLevels: 20}
                  ),
                new OpenLayers.Layer.Google(
                  "Google Hybrid",
                  {type: google.maps.MapTypeId.HYBRID, numZoomLevels: 20}
                  )
                ],
                center: new OpenLayers.LonLat(100.538421, 13.766022)
              // Google.v3 uses web mercator as projection, so we have to
              // transform our coordinates
              .transform('EPSG:4326', 'EPSG:3857'),
              zoom: 9
          });

            map.addControl(new OpenLayers.Control.LayerSwitcher());


        }
    </script>
  </head>
  <body onload="init()">
    <div class="container">
      <div class="row">
        <div class="span6 offset3">
          <div id="map" style="width: 500px; height: 400px"></div> 
        </div>
      </div>
    </div>

  </body>
</html>




