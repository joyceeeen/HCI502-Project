

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
<script>
	function changeMap(){
		 window.location.search += '&param='+document.getElementById("quake").value;	
	}
</script>