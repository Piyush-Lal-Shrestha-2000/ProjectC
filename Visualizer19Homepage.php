<?php
    $data = "Data of ....<br>Total cases: ...<br>Deaths: ...<br>Recovered: ...";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visualizer-19 | Home </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="icon" href = "Images/Visualizer19Logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Popover Example</h3>
  <img src = "Untitled.png" class = "img-fluid" usemap="#workmap" /><br>
  <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>
  <map name="workmap">
      <!--area target="" alt="" title="" href="" coords="105,92,209,195" shape="rect" -->
      <area href="#" data-toggle="popover" title="Data of ..." data-html="true" data-content="Total cases: ...<br/>Deaths: ...<br>Recovered: ..." coords="105,92,209,195" shape="rect">
  </map>
</div>
    
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</body>
</html>
