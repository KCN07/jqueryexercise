<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<!-- BOOTSTRAP -->

	<script>
	$(document).ready(function(){
		$(".parent").click(function(){
			$(".child1").toggle(200);
		});

		$(".child1").click(function(){
			$(".bd").show(2000);
		});	
	});
	</script>
</head>
<body>

<button class="btn btn-success parent">About Me</button><br />
<button class="btn btn-danger child1" style="display:none">My Biodata</button>
<p class="bd" style ="display:none;" >biodata is biodata, i'm kaniz,i'm 22 years old.</p>

</body>
</html>
