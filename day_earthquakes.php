
            <table class="table" >
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Date and Time" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Magnitude" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Location" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Tsunami" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Coordinates" disabled></th>
                    </tr>
                </thead>
                <tbody>
                  <tr>

                  <?php
  					$jsondata =file_get_contents("http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson");
  					$json = json_decode($jsondata,true); ?>

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
            $output .= "<td> <a href='javascript:map.panTo(new google.maps.LatLng(".$features['geometry']['coordinates'][1].",".$features['geometry']['coordinates'][0]."));map.setZoom(9);' onclick='backtotop();coordinates(".$features['geometry']['coordinates'][1].",".$features['geometry']['coordinates'][0].",".$features['properties']['tsunami'].",".$features['properties']['mag'].",".$features['properties']['time'].");'>" .$features['geometry']['coordinates'][0]. "<br>".$features['geometry']['coordinates'][1].  "<br>".$features['geometry']['coordinates'][2]."</a></td>";
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
