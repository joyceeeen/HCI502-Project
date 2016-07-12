<?php
	include 'header.php';
	?>
	   <div class="dropdown">
    <select onchange="changeMap()" id="quake">
      <option value="hour">Past Hour</a></option>
      <option value="day">Past Day</option>
      <option value="seven">Past Seven Days</option>
	  <option value="month">Past Thirty Days</option>
    </select>
  </div>
	
  <?php
	$url = $_SERVER['REQUEST_URI'];
	if(strpos($url, '?') === false){
		include 'hour_earthquakes.php';
	}
	else{
		$arr1 = explode('?',$url);
		$arr2 = explode('=',$arr1[1]);
		if($arr2[1] == 'hour'){
			include 'hour_earthquakes.php';
		}
		else if($arr2[1] == 'day'){
			include 'day_earthquakes.php';
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

