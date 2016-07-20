<?php
	include 'header.php';
	?>

					<div class="panel panel-primary filterable" style="margin-bottom:50px;">
							<div class="panel-heading">

									<div class="dropdown">
								 <select onchange="changeMap()" id="quake" class="selectpicker" name="quake">

									 <option value="hour" id="hour">Past Hour</option>
									 <option value="day" id="day">Past Day</option>
									 <option value="seven" id="seven">Past Week</option>
								     <option value="month" id="month">Past Month</option>
								 </select>
							 </div>

									<div class="pull-right" style="margin-top:-32px;">
											<button class="btn btn-default btn-sm btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
									</div>
							</div>
  <?php
	$url = $_SERVER['REQUEST_URI'];
	
	if(strpos($url, '?') == false){
		include 'hour_earthquakes.php';
	}
	else{

		$arr1 = explode('?',$url);
		$arr2 = explode('=',$arr1[1]);
		
		if($arr2[1] == 'day'){
			include 'day_earthquakes.php';
		}
		else if($arr2[1] == 'hour'){
			include 'hour_earthquakes.php';
		}
		else if($arr2[1] == 'seven'){
			include 'week_earthquakes.php';
		}
		else if($arr2[1] == 'month'){
			include 'month_earthquakes.php';
		}
	}

	include 'footer.php';
?>
