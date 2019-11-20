<!DOCTYPE html>
<html>
 <head>
  <title>Joel Games!</title>

<!-- Start of Emerge2's Analytics Tracking Client Code (v8) - Details at https://ref.emerge2.com/emerge2_analytics/ -->
<script>
var e2_google_analytics_1	= 'UA-134618923-3';	// populate to enable Google Analytics tracking, e.g. 'UA-nnnnnn-nn'
var e2_is_misc			= true;	// General/Misc
</script>
<script type="application/javascript" src="https://common.emerge2.com/emerge2_analytics_v3.js"></script>
<!-- End of Emerge2's Analytics Tracking Client Code -->

  <style>
   body{background: #130a02;}
   h2{color: #ff9911; font-size:3em;}
  </style>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
function Game(){
 window.location.assign("/game1.php");
}

function Website(){
 window.location.assign("/welcome.php");
}

function CityGame(){
 window.location.assign("/city game.php");
}

function CountDown(){
 window.location.assign("/camp count down.php");
}

  </script>
 </head>
 <body>
  <h2>What Would You Like To Do?</h2>
  <table>
   <tr>
    <td><a href="merrychristmas.php"> Shhh! </a>
   </tr>
   <tr>
    <td><input type="submit" id="button1" onclick="Game(); return false;" value="Fight! Move! Repeat!"></td>
    <td><input type="submit" id="button1" onclick="Website(); return false;" value="Website"></td>
    <td><input type="submit" id="button1" onclick="CityGame(); return false;" value="City Game"></td>
   </tr>
  </table>
 </body>
</html>