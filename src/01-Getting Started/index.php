<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>OpenLayers Example</title>

    <link rel="stylesheet" href="../../lib/bootstrap-2.3.2/css/bootstrap.min.css">
    <script src="../../lib/jquery-1.8.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="../../lib/OpenLayers-2.13/OpenLayers.js"></script>
  
  <script src="http://openlayers.org/api/OpenLayers.js"></script>
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
              zoom: 18
          });

            map.addControl(new OpenLayers.Control.LayerSwitcher());


        }
    </script>
</head>
<body  onload="init()">

    <div class="container-fluid">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="page-header">
              <img src="../../resources/code-aholic_logo.png" style="width: 90px" class="pull-left">
              <img src="../../resources/openLayers-logo.png" style="width: 200px" class="pull-right img-rounded">
              <span class="lead"> &nbsp;&nbsp;Getting Start</span>
              <blockquote >
                <small class="pull-left">by THE JOSH
                  <cite class="text-info" title="Source Title">, scada.josh@gmail.com</cite>
              </small>
          </blockquote>
      </div>
      <!-- ################################################################################ -->


      <!-- Place code here -->
      <div id="map" style="width: 100%; height: 80%"></div> 


      <!-- ################################################################################ -->
  </div>
</div>
</div>

</body>
</html>
