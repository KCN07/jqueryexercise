<!DOCTYPE html>
<html>
<head>
<script src="js/jquery_latest.js"></script>
<script>
$(document).ready(function(){
  $("#btn").click(function(){
    $("#div1").remove();
  });
  $("#btn2").click(function(){
    $("#div1").empty();
  });
});
</script>
</head>
<body>

<div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:green;color:white;">

<p>Hello Students</p>
<p>Welcome to jQuery</p>
<p>Thank You!<br /></p>

</div>
<br>
<button id="btn">Remove Element</button>
<button id="btn2">Empty the div element</button>


</body>
</html>
