<!DOCTYPE html>
<html>
<head>

<style>
button{
	background-color:lightblue;
	border-radius: 5px;
	cursor: pointer;
}
button:hover{
	background-color:red;
}
p{
	color: white;
	background-color: gray;
	font-weight: bold;
	border-radius: 15px;
	padding: 10px;
	font-family: Verdana;
	cursor: default;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".show").click(function(){
        $(".mydiv").show(2000);
    });
	$(".hide").click(function(){
        $(".mydiv").hide();
    });
});
</script>
</head>
<body>

<button class="show">Show</button>

<button class="hide">Hide</button>
<div  class="mydiv" style="display:none;">
	<p>This is a paragraph with little content.</p>
	<p>This is another small paragraph.</p>
</div>

</body>
</html>
