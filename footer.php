

</body>
</html>
 <script type="text/javascript" src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&callback=initMap"></script>
<script src="js/maps.js" charset="utf-8"></script>
<script src="js/bootstrap-select.min.js" charset="utf-8"></script>

<script type="text/javascript">
 var width = +document.getElementById("sukat").value;
 for(var i=1; i<=width;i++){
  var truetime = +document.getElementById("oras"+i).value;
  var d= new Date(truetime);
document.getElementById("tamangoras"+i).innerHTML = d;


}
</script>
<script src="js/filter.js" charset="utf-8"></script>
<script>
	function changeMap(){
		var sourceURL = window.location.href.split("?")[0];
		sourceURL +='?&param='+document.getElementById("quake").value;
		 window.location.href= sourceURL;

	}
	$( document ).ready(function() {
	var sourceURL = window.location.href.split("?")[1];
	var  type= sourceURL.split("=")[1];
	if(sourceURL == 'undefined'){
	$('#quake option[value=hour]').attr('selected','selected');
	}
	else{
   $('#quake option[value='+type+']').attr('selected','selected');
   }
});
</script>
<script type="text/javascript">
function earthquake(){
  $('html,body').animate({
        scrollTop: $(".sub-header").offset().top},
        'slow');
      }
function backtotop() {
  $("html, body").animate({ scrollTop: 0 }, "slow");

}
</script>
