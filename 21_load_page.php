<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#kaniz").load("filesjq/page.php");
  });
});
</script>
</head>
<body>


<button>Click Here</button> <br /> <br />

<div id="kaniz">
	<h2>jQuery AJAX will Change This Text</h2>
</div>

</body>
</html>
