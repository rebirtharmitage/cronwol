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
<p id="first_test">this is alpha testing</p>
<p id="first_second">this is the second testing</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
</body>
</html>