<!DOCTYPE html>
<html lang="en">
<head>
	<title>LED Control</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="SHORTCUT ICON" HREF="/images/LED.png">
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mqttws31.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="0" class="spectrum-background">

<div class="container-fluid text-center">
	<h1>LED Control</h1>  
</div>

<div class="text-center">
	Topic: <input id="inputBox1" type="text"> </br></br>
	Message: <input id="inputBox2" type="text"> </br></br>
	<button onclick='sendMessage(document.getElementById("inputBox1").value,document.getElementById("inputBox2").value);' class="btn btn-primary">Send message</button>
</div>
</br>
<div class="text-center container">
	<input type="range" min="0" max="99" value="0" id="sliderRed">
	<p>Red: <span id="valRed"></span></p>
	</br>
	
	<input type="range" min="0" max="99" value="0" id="sliderGreen">
	<p>Green: <span id="valGreen"></span></p>
	</br>
	
	<input type="range" min="0" max="99" value="0" id="sliderBlue">
	<p>Blue: <span id="valBlue"></span></p>
	</br>
	
	<input type="range" min="0" max="99" value="0" id="sliderSpeed">
	<p>Speed (ms): <span id="valSpeed"></span></p>
	</br>
</div>

</br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
  
</body>
</html>