<!DOCTYPE html>
<html>
<head>
<script src="jquery-3.6.3.js"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#div1").load("demolode.txt");
  });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button id="btn1">Get External Content</button>

</body>
</html>