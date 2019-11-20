<!DOCTYPE html>
<html>
<head>
<title>City Game!</title>

<!-- Start of Emerge2's Analytics Tracking Client Code (v8) - Details at https://ref.emerge2.com/emerge2_analytics/ -->
<script>
var e2_google_analytics_1	= 'UA-134618923-3';	// populate to enable Google Analytics tracking, e.g. 'UA-nnnnnn-nn'
var e2_is_misc			= true;	// General/Misc
</script>
<script type="application/javascript" src="https://common.emerge2.com/emerge2_analytics_v3.js"></script>
<!-- End of Emerge2's Analytics Tracking Client Code -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

var mapSize = 0;

var balance = 0;
var netIncome = 0;

function pause(){
 $("#pause_button").hide();
 $("#unpause_button").show();
}

function unpause(){
 $("#unpause_button").hide();
 $("#pause_button").show();
}

function set_up_city_mainline(){
 if(check_city_name()){
  $("#start_up").hide();
  $("#top_game_info").show();
  $("#not_done_yet").show();
  map_size();
  starting_money();
 } else {
  alert("city name incompatible!");
 }
}

function check_city_name(){
 var cityName = $("#start_up_city_name").val();
 if(cityName.length < 1){
  //error no name typed in
  return false;
 } else {
  if(cityName.length < 15){
   return true;
  } else {
   //error too long name
   return false;
  }
 }
}

function map_size(){
 var choosenMapSize = $("#start_up_city_size").val();
 switch(choosenMapSize){
  case 's':
   mapSize = 10;
   break;
  case 'm':
   mapSize = 20;
   break;
  case 'l':
   mapSize = 30;
   break;
  default:
   alert("Alert! Map Size Choosen Is Unknown!");
 }
}

function starting_money(){
 var startingMoney = $("#start_up_city_money").val();
 var money = startingMoney * 10000;
 balance = money;
 var result = startingMoney;
 result += "0,000";
 $("#top_game_info_balance").html(result);
 $("#top_game_info_net_income").html(netIncome);
}

</script>

<body>

<style>
.nodisplay{display:none;}
body{background: #130a02;}
h1{color: #ff9911; font-size:4em; float:left;}
h2{color: #ff9911; font-size:3em;}
h4{color: #ff9911; float:left;}
#pause_button{float:left; width:100px; height:100px; background: #ff0000;}
#unpause_button{float:left; width:100px; height:100px; background: #ff0000;}
#nothing_button1{float:left; width:475px; height:100px; background: #130a02;}
#nothing_button2{float:left; width:350px; height:100px; background: #130a02;}
#nothing_button3{float:left; width:100px; height:40px; background: #130a02;}
p{color: #ff9911; text-align:centre; clear:left;}
</style>

<div id="top_info">
<input type="submit" id="nothing_button1">
<h1>City Game!</h1>
<input type="submit" id="nothing_button2">
<button type="button" id="pause_button" onclick="pause(); return false;" class="nodisplay"><img src="/images/city_game/pause_button_image.png"></button>
<button type="button" id="unpause_button" onclick="unpause(); return false;"><img src="/images/city_game/unpause_button_image.png"></button>
</div>

<div id="top_game_info" class="nodisplay">
<input type="submit" id="nothing_button3">
<h4>Balance: $</h4>
<h4 id="top_game_info_balance"></h4>
<h4>+</h4>
<h4 id="top_game_info_net_income"></h4>
<input type="submit" id="nothing_button3">
</div>

<div id="start_up">
<p>City Name <input type="text" id="start_up_city_name"></p>
<p>City Size <select id="start_up_city_size" name="start_up_city_size" value="">
<option value="s">Small</option>
<option value="m">Medium</option>
<option value="l">Large</option>
</select></p>
<p>Starting Money <select id="start_up_city_money" name="start_up_city_money" value="">
<option value="5">$50,000</option>
<option value="10">$100,000</option>
<option value="15">$150,000</option>
<option value="20">$200,000</option>
<option value="25">$250,000</option>
</select></p>
<input type="submit" id="start_up_city_submit" onclick="set_up_city_mainline(); return false;" value="Submit">
</div>

<div id="not_done_yet" class="nodisplay">
<p>This Part Isn't Coded In Yet! It Will Be Soon!</p>
</div>

<div id="map" class="nodisplay">
<table cellpadding=0 cellspacing=0>
</table>
</div>

</body>