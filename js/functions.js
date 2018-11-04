//script for connection to mqtt broker, example of eclipse paho used. 
//Created 1-11-2018
//Author: Pepijn Hogervorst

var wsbroker = "192.168.178.34";  //MQTT websocket enabled broker
var urlChartData = 'http://192.168.178.13/chart_data.php';
var wsPort = 8080; // port 

//NORMAL FUNCTIONS
function sendMessage(topic, msg)
{
	websocketclient.publish(topic, msg, 1, false);
}



//DOCUMENT READY FUNCTIONS
 
$(document).ready(function(){
	websocketclient.connect();	
	
	var sliderR = document.getElementById("sliderRed");
	var sliderG = document.getElementById("sliderGreen");
	var sliderB = document.getElementById("sliderBlue");
	var sliderSP = document.getElementById("sliderSpeed");
	
	var outputR = document.getElementById("valRed");
	var outputG = document.getElementById("valGreen");
	var outputB = document.getElementById("valBlue");
	var outputSP = document.getElementById("valSpeed");
	
	outputR.innerHTML = sliderR.value;
	outputG.innerHTML = sliderG.value;
	outputB.innerHTML = sliderB.value;
	outputSP.innerHTML = sliderSP.value;
	
	sliderR.oninput = function() {
	  outputR.innerHTML = this.value;
	  sendMessage("LED/Color/Red", this.value);
	}
	sliderG.oninput = function() {
	  outputG.innerHTML = this.value;
	  sendMessage("LED/Color/Green", this.value);
	}
	sliderB.oninput = function() {
	  outputB.innerHTML = this.value;
	  sendMessage("LED/Color/Blue", this.value);
	}
	
	sliderSP.oninput = function() {
	  outputSP.innerHTML = this.value;
	  sendMessage("LED/Speed", this.value);
	}
})


