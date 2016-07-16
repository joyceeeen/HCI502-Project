<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Valley Fault System</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-select.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
</head>

  <body onload="javascript:my()">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="maps.php">Hackzilla</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:map.panTo(new google.maps.LatLng(14.8302664,121.1126421));map.setZoom(9);" onclick="showEartquakes();backtotop();">Valley Fault System</a></li>
            <li><a href="javascript:map.panTo(new google.maps.LatLng(14.8302664,121.1126421));map.setZoom(9);"  onclick="showEvacuation();backtotop();">Evacuation Areas</a></li>
            <li><a href="#" onclick="earthquake();">Earthquakes</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <h2 class="valley"><a href="javascript:map.panTo(new google.maps.LatLng(14.8302664,121.1126421));map.setZoom(9);" onclick="closeAllInfoWindows();" class="all-valley">Valley Fault System</a></h2>
            <h3>Bulacan</h3>
            <li><a href="javascript:map.panTo(new google.maps.LatLng(15.0929081,121.0613609));map.setZoom(15);" onclick="myClick(0);">Doña Remedios Trinidad</a></li>
            <li><a href="javascript:map.panTo(new google.maps.LatLng(14.8740942,121.1427638));map.setZoom(15);" onclick="myClick(1);">Norzagaray</a></li>
            <li><a href="javascript:map.panTo(new google.maps.LatLng(14.8236989,121.0948389));map.setZoom(14);" onclick="myClick(2);">San Jose del Monte City</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <h3>Rizal</h3>
            <li><a href="javascript:map.panTo(new google.maps.LatLng(14.760122,121.2003971));map.setZoom(14);" onclick="myClick(3);">Rodriguez</a></li>
            <li><a href="javascript:map.panTo(new google.maps.LatLng(14.6774533,121.1591888));map.setZoom(15);" onclick="myClick(4);">San Mateo</a></li>
          </ul>

        <ul class="nav nav-sidebar">
          <h3>Metro Manila</h3>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.6750431,121.0402429));map.setZoom(13);" onclick="myClick(5);">Quezon City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.6504042,121.1019699));map.setZoom(14);" onclick="myClick(6);">Marikina City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.5772737,121.0857342));map.setZoom(14);" onclick="myClick(7);">Pasig City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.5546368,121.0241139));map.setZoom(14);" onclick="myClick(8);">Makati City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.5170481,121.047546));map.setZoom(14);" onclick="myClick(9);">Taguig City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.4067315,121.0365698));map.setZoom(14);" onclick="myClick(10);">Muntinlupa City</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <h3>Cavite</h3>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.3072134,121.0116093));map.setZoom(15);" onclick="myClick(11);">Gen. Mariano Alvarez</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.2971985,121.0387576));map.setZoom(15);" onclick="myClick(12);">Carmona</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.2191259,120.9692234));map.setZoom(15);" onclick="myClick(13);">Silang</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <h3>Laguna</h3>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.3488148,121.0342489));map.setZoom(15);" onclick="myClick(14);">San Pedro City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.3034756,121.0759443));map.setZoom(15);" onclick="myClick(15);">Biñan City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.283444,121.084726));map.setZoom(15);" onclick="myClick(16);">Santa Rosa City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.2471016,121.1360729));map.setZoom(15);"onclick="myClick(17);">Cabuyao City</a></li>
          <li><a href="javascript:map.panTo(new google.maps.LatLng(14.1870326,121.1235034));map.setZoom(14);"onclick="myClick(18);">Calamba City</a></li>
        </ul>
        </div>
      </div>
        <div class="col-sm-8 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row" style="margin-right: -30px;margin-left: -25px;">

            <div class="col-xs-12 map" id="map">

            </div>

          </div>
          <div class="container ">
            <div class="row">
                <div class="col-md-4 tweet">
                    <div class="panel panel-primary">
                        <div class="panel-heading" id="accordion">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter Feed
                            <div class="btn-group pull-right">
                                <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </a>
                            </div>
                        </div>
                    <div class="panel-collapse collapse " id="collapseOne">
                        <div class="panel-body">
                          <a class="twitter-timeline"  href="https://twitter.com/search?q=Earthquake%20%23earthquake" data-widget-id="752168888759046144"   data-chrome="nofooter noborders"  width="100%" height="300"><p>Tweets </p></a>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                        </div>
                        <div class="panel-footer">

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


 <h2 class="sub-header">Earthquakes</h2>
