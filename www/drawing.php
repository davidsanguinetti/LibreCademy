<?php
	$draw='active';
	$draw = true;
	$loginreq = true;
	include_once 'include/header.inc';
?>
		 <link href="css/draw.css" rel="stylesheet" />
<div class="container">
	<h1>Pablo Picasso</h1>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<a onclick="TogetherJS(this); return false;"><img src="https://togetherjs.com/images/start-togetherjs-blue.png" style="width: 135px" /></a>

	<div class="btn-group btn-group-justified" style="margin-right: auto; margin-top: 10px; width: 70%;"> 
	  <a class="btn btn-info color-picker upper-button">Blue</a>          
	    <a class="btn btn-success color-picker">Green</a>
		  <a class="btn btn-warning color-picker">Yellow</a>
		    <a class="btn btn-danger color-picker">Red</a>
			  <a class="btn btn-success color-picker black-pick upper-button" style="border-bottom-width: 0px;">Black</a>
			  </div>
<div class="clearfix"></div>
<div id="sketchContainer" style="width: 70%; height: 600px; border: 1px solid rgba(0,0,0,0.2)"><canvas id="sketch"></canvas></div>
<div class="btn-group btn-group-justified" style="margin-right: auto; width: 70%;"> 
  <a class="btn btn-info user-color-pick bottom-button" style="width: 30%;">User Color</a>
  <a class="btn btn-success plus-size" style="width: 15%;">
    <i class="fa fa-plus-square"></i>
  </a>
  <a class="btn btn-warning clear" style="width: 15%;">
    <i class="fa fa-times-circle"></i>
  </a>
  <a class="btn btn-danger minus-size" style="width: 15%;">
    <i class="fa fa-minus-square"></i>
  </a>
  <a class="btn btn-default eraser bottom-button" style="width: 35%; border-top-width: 0px;">
    <i class="fa fa-eraser"></i>
  </a>
</div>
</div>
<script src="js/draw.js"></script>
<?php
	include_once 'include/footer.inc';
?>


