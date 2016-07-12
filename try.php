<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Valley Fault System</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
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
          <a class="navbar-brand" href="#">Hackzilla</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Valley Fault System</a></li>
            <li><a href="#">Evacuation Areas</a></li>
            <li><a href="#">Earthquakes</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <h2>Valley Fault System</h2>
            <h3>Bulacan</h3>
            <li><a href="">Doña Remedios Trinidad</a></li>
            <li><a href="">Norzagaray</a></li>
            <li><a href="">San Jose del Monte City</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <h3>Rizal</h3>
            <li><a href="">Rodriguez</a></li>
            <li><a href="">San Mateo</a></li>
          </ul>

        <ul class="nav nav-sidebar">
          <h3>Metro Manila</h3>
          <li><a href="">Quezon City</a></li>
          <li><a href="">Marikina City</a></li>
          <li><a href="">Pasig City</a></li>
          <li><a href="">Makati City</a></li>
          <li><a href="">Taguig City</a></li>
          <li><a href="">Muntinlupa City</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <h3>Cavite</h3>
          <li><a href="">Gen. Mariano Alvarez</a></li>
          <li><a href="">Carmona</a></li>
          <li><a href="">Silang</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <h3>Laguna</h3>
          <li><a href="">San Pedro City</a></li>
          <li><a href="">Biñan City</a></li>
          <li><a href="">Santa Rosa City</a></li>
          <li><a href="">Cabuyao City</a></li>
          <li><a href="">Calamba City</a></li>
        </ul>
        </div>
      </div>
        <div class="col-sm-8 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row" style="margin-right: -30px;margin-left: -25px;">
            <div class="col-xs-12" id="map">

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
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date and Time</th>
                  <th>Magnitude</th>
                  <th>Location</th>
                  <th>Tsunami</th>
				  <th>Coordinates</th>
                </tr>
              </thead>
              <tbody>
                <tr>
				  
                <?php 
					$jsondata =file_get_contents("http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson");
					$json = json_decode($jsondata,true); ?>
					  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li value="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson"><a href="#">Past Hour</a></li>
      <li value="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson">Past Day</li>
      <li value="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_week.geojson">Past Seven Days</li>
	  <li value="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_month.geojson">Past Thirty Days</li>
    </ul>
  </div>
		<?php
					$output ="<tr>";
					$i=1;
					$size = count($json);
					foreach($json['features'] as $features){
					$id = 'tamangoras'.$i;
					
					?>
					
					<?php $output .= "<td id=".$id."></td>";?>
					<?php
					$output .= "<td>" .$features['properties']['mag']. "</td>";
					$output .= "<td>" .$features['properties']['place']. "</td>";
					$output .= "<td>" .$features['properties']['tsunami']. "</td>";
					$output .= "<td>" .$features['geometry']['coordinates'][0]. "<br>".$features['geometry']['coordinates'][1].  "<br>".$features['geometry']['coordinates'][2]."</td>";
					$output .= "</tr>";
						$idsaoras = 'oras'.$i; 
						?>
						<input type="hidden" value="<?php echo $features['properties']['time']; ?>" id="<?php echo $idsaoras;?>">
					<?php $i++; ?>
				
					
					<?php  
					
						}
					?>
					<input type="hidden" value="<?php echo $i; ?>" id="sukat">
					
					<?php 
				echo $output;
				?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



</body>
</html>
 <script type="text/javascript" src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&callback=initMap"></script>
<script src="js/maps.js" charset="utf-8"></script>

<script type="text/javascript">
 var width = +document.getElementById("sukat").value;
 for(var i=1; i<=width;i++){
  var truetime = +document.getElementById("oras"+i).value;
  var d= new Date(truetime);
document.getElementById("tamangoras"+i).innerHTML = d;


}
</script>
