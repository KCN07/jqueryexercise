<!DOCTYPE html>
<html>
<head>
<script src="js/jquery_latest.js"></script>
<script>
$(document).ready(function(){
	$("#btn1").click(function(){
		alert( "Text: " + $("#nirjhor").text() );
	});
	$("#btn2").click(function(){
		alert( "HTML: " + $("#nirjhor").html() );
	});
	$("#btn3").click(function(){
    alert("Value: " + $("#test").val());
  });
  $("#btn4").click(function(){
    alert($("#w3s").attr("href"));
  });
});
</script>
</head>

<body>
	<p id="nirjhor" style = "display:none;" >IT IS A MESSAGE <b>WITH HTML TAG</b> TO SHOW IN ALERT BOX</p>
	<button id="btn1">Show Text</button>
	<button id="btn2">Show HTML</button>
	<p>Name: <input type="text" id="test" value=""></p>

    <button id="btn3" type= "submit">Show Value</button>
	
	<p><a href="https://www.w3schools.com" id="w3s" target="blank" >W3Schools.com</a></p>

    <button id="btn4">Show href Value</button>

</body>
</html>
