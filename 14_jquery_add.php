<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

function appendText() 
{
    var txt1 = "<p>NIRJHOR</p>";              	// Create text with HTML
	
    var txt2 = $("<p></p>").text("ANJUM");  	// <p>ANJUM</p> | Create text with jQuery
	
    var txt3 = document.createElement("p"); 	// <p></p>
    txt3.innerHTML = "MOTALEB";              	// <p>MOTALEB</p> | Create text with DOM
	
    $("body").append(txt1, txt2, txt3);     	// Append new elements
}

$(document).ready(function(){
  $("#btn1").click(function(){
    $("p").prepend("<b>Prepended text</b>. ");
  });
  $("#btn2").click(function(){
    $("ol").prepend("<li>Prepended item</li>");
  });
  
  $("#btn3").click(function(){
    $("img").before("<b>Before</b>");
  });

  $("#btn4").click(function(){
    $("img").after("<i>After</i>");
  });
});

</script>
</head>
<body>

<p>Welcome to IT Training Center</p>
<button onClick="appendText()">Append Text</button>


<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<ol>
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ol>

<button id="btn1">Prepend text</button>
<button id="btn2">Prepend list item</button>

</br>

<img src="imagesjq/img_flower.jpg" alt="jQuery" width="100" height="140"><br><br>

<button id="btn3">Insert before</button>
<button id="btn4">Insert after</button>

</body>
</html>
