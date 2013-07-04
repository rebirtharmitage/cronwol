<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $($("[id^=first_]")).hide();
  });
  $("#show").click(function(){
    $($("[id^=first_]")).show();
  });
});
</script>
</head>
<body>
<p id="first_description">Please select either a provider or a service below</p>
<form id="first_stage">

</form>
<button id="hide">Hide</button>
<button id="show">Show</button>
</body>
</html>