<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!--<script src="../lib/jquery-1.8.2/jquery.min.js"></script>

  <link rel="stylesheet" href="../lib/bootstrap-2.3.2/css/bootstrap.min.css">
  <script src="../lib/bootstrap-2.3.2/js/bootstrap.js"></script>

   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> 
  <script src="../lib/OpenLayers-2.13/OpenLayers.js"></script> -->
  
    <link rel="stylesheet" href="../lib/OpenLayers-2.13/theme/default/style.css" type="text/css">
    <link rel="stylesheet" href="../lib/OpenLayers-2.13/examples/style.css" type="text/css">
    <script src="../lib/OpenLayers-2.13/OpenLayers.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

    <script type="text/javascript">
        var lon = 5;
        var lat = 40;
        var zoom = 5;
        var map, layer;

        function init(){
            // map = new OpenLayers.Map( 'map' );
            // layer = new OpenLayers.Layer.WMS( "OpenLayers WMS",
            //         "http://vmap0.tiles.osgeo.org/wms/vmap0", {layers: 'basic'} );
            // map.addLayer(layer);

            // map.setCenter(new OpenLayers.LonLat(lon, lat), zoom);
            // map.addControl( new OpenLayers.Control.LayerSwitcher() );


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
    <h1 id="title">WMS Example</h1>

    <div id="tags">
        wms, layer, singletile
    </div>
    <p id="shortdesc">
        Shows the basic use of openlayers using a WMS layer
    </p>

    <div id="map" class="smallmap"></div>

    <div id="docs">
        <p>This is an example of how to add an WMS layer to the OpenLayers
        window. The images are tiled in this instance. If you wanted to not use
        a tiled WMS, "singleTile" option to true like shown in this example.</p>
    </div>
  </body>
</html>




