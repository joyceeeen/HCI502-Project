
         
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

