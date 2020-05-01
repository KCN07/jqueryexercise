<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeOut();
        $("#div2").fadeOut("slow");
        $("#div3").fadeOut(3000);
    });
});
</script>
</head>
<body>

<button>FADE OUT</button><br><br>

<div id="div1" style="width:80px;height:80px;background-color:lightgreen;"></div><br>
<div id="div2" style="width:80px;height:80px;background-color:lightblue;"></div><br>
<div id="div3" style="width:80px;height:80px;background-color:gray;"></div>

</body>
</html>
