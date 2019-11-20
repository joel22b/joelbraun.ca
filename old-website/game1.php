<!DOCTYPE html>
<html>
<head>
<title>Fight! Move! Repeat!</title>

<!-- Start of Emerge2's Analytics Tracking Client Code (v8) - Details at https://ref.emerge2.com/emerge2_analytics/ -->
<script>
var e2_google_analytics_1	= 'UA-134618923-3';	// populate to enable Google Analytics tracking, e.g. 'UA-nnnnnn-nn'
var e2_is_misc			= true;	// General/Misc
</script>
<script type="application/javascript" src="https://common.emerge2.com/emerge2_analytics_v3.js"></script>
<!-- End of Emerge2's Analytics Tracking Client Code -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

var imgdir = "/images/game1/";
var animalTiger = {group: "a", type: "t", name: "Tiger", damage: 35, defence: 20, range: 1, speed: 1, health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_tiger.png", deadImage: imgdir+"animal_tiger_dead.png", bigImage: imgdir+"animal_tiger_big.png"};
var animalElephant = {group: "a", type: "e", name: "Elephant", damage: 20, defence: 50, range: 1, speed: 1, health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_elephant.png", deadImage: imgdir+"animal_elephant_dead.png", bigImage: imgdir+"animal_elephant_big.png"};
var animalSnake = {group: "a", type: "s", name: "Snake", damage: 25, defence: 25, range: 2, speed: 1,  health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_snake.png", deadImage: imgdir+"animal_snake_dead.png", bigImage: imgdir+"animal_snake_big.png"};
var animalPolarBear = {group: "a", type: "p", name: "Polar Bear", damage: 30, defence: 30, speed: 1, range: 1, health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_polarbear.png", deadImage: imgdir+"animal_polarbear_dead.png", bigImage: imgdir+"animal_polarbear_big.png"};
var animalDragon = {group: "a", type: "d", name: "Dragon", damage: 50, defence: 50, range: 2, speed: 1, health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_dragon.png", deadImage: imgdir+"animal_dragon_dead.png", bigImage: imgdir+"animal_dragon_big.png"};
var animalCrocodile  = {group: "a", type: "c", name: "Crocodile", damage: 35, defence: 15, range: 1, speed: 2, health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_crocodile.png", deadImage: imgdir+"animal_crocodile_dead.png", bigImage: imgdir+"animal_crocodile_big.png"};
var animalKittin = {group: "a", type: "k", name: "Kitten", damage: 40, defence: 40, range: 1, speed: 1, health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_kittin.png", deadImage: imgdir+"animal_kittin_dead.png", bigImage: imgdir+"animal_kittin_big.png"};
var animalWolf  = {group: "a", type: "w", name: "Wolf", damage: 40, defence: 10, range: 1, speed: 2, health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"animal_wolf.png", deadImage: imgdir+"animal_wolf_dead.png", bigImage: imgdir+"animal_wolf_big.png"}

var weaponHammer = {group: "w", type: "h", name: "Hammer", damage: 80, defence: 30, range: 1, decay: 1, goTroughTree: false, goTroughRock: false, coexist: false, image: "", bigImage: imgdir+"weapon_hammer_big.png"};
var weaponAxe = {group: "w", type: "a", name: "Axe", damage: 75, defence: 60, range: 2, decay: 0.4, goTroughTree: true, goTroughRock: false, coexist: false, image: "", bigImage: imgdir+"weapon_axe_big.png"};
var weaponBow = {group: "w", type: "bo", name: "Bow", damage: 75, defence: 15, range: 6, decay: 0.1, goTroughTree: false, goTroughRock: false, coexist: false, image: "", bigImage: imgdir+"weapon_bow_big.png"};
var weaponSpear = {group: "w", type: "s", name: "Spear", damage: 70, defence: 25, range: 3, decay: 0.3, goTroughTree: true, goTroughRock: false, coexist: false, image: "", bigImage: imgdir+"weapon_spear_big.png"};
var weaponRapier = {group: "w", type: "r", name: "Rapier", damage: 90, defence: 25, range: 1, decay: 1, goTroughTree: false, goTroughRock: false, coexist: false, image: "", bigImage: imgdir+"weapon_rapier_big.png"};
var weaponLongsword = {group: "w", type: "l", name: "Longsword", damage: 75, defence: 30, range: 2, decay: 1, goTroughTree: false, goTroughRock: false, coexist: false, image: "", bigImage: imgdir+"weapon_longsword_big.png"};
var weaponBroadsword = {group: "w", type: "bs", name: "Broadsword", damage: 70, defence: 50, range: 1, decay: 1, goTroughTree: false, goTroughRock: false, coexist: false, image: "", bigImage: imgdir+"weapon_broadsword_big.png"};

var groundGrass = {group: "g", type: "g", name: "Grass", coexist: true, image: imgdir+"map_back_grass.png"};
var groundTree = {group: "g", type: "t", name: "Tree", coexist: false, image: imgdir+"map_back_tree.png"};
var groundRock = {group: "g", type: "r", name: "Rock", coexist: false, image: imgdir+"map_back_rock.png"};

var human = {group: "h", name: "", health: 100, x: 0, y: 0, coexist: false, alive: true, image: imgdir+"person1.png", deadImage: imgdir+"person1_dead.png", bigImage: imgdir+"person1_big.png"};

var animalArray = [animalTiger, animalElephant, animalSnake, animalPolarBear, animalDragon, animalCrocodile, animalKittin, animalWolf];
var weaponArray = [weaponHammer, weaponAxe, weaponBow, weaponSpear, weaponRapier, weaponLongsword, weaponBroadsword];

var choosenAnimals = [];
var choosenWeapons = [];

var mapSize = 12;
var map = [];
var map_empty = {group: "e", type: "", name: "", image: "", coexist: true};
 
var mapXLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'];
var mapYNumbers = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

// map object densities



var treesPercent = 15;
var rocksPercent = 10;
var maxMapLocations = 0;
var maxTrees = 0;
var maxRocks = 0;

// game setup limits
var minAnimals = 3;
var maxAnimals = 6;
var minWeapons = 2;
var maxWeapons = 2;

function initialize_map(){
 var string = '';
 string += '<table id="map_table">\n';
 string += '<tr><td></td>';
 for(var r = 0; r < mapSize; r++){
  string += '<td><strong>';
  string += mapYNumbers[r];
  string += '</strong></td>';
 }
 string += '</tr>';
 for(var x=0;x<mapSize;x++){
  var row = [];
  string += '<tr>\n';
  string += '<td><strong>';
  string += mapXLetters[x];
  string += '</strong></td>';
  for(var y=0;y<mapSize;y++){
   row.push(map_empty);
   string += '<td id="map_'+x+'_'+y+'"></td>';
  }
  map.push(row);
  string += '</tr>\n';
 }
 string += '</table>\n';
 $('#map').html(string);
 for(var x = 0; x < mapSize; x++){
   for(var y = 0; y < mapSize; y++){
   set_map_location(x,y,groundGrass);
 }
}

if((treesPercent + rocksPercent) > 75){
   alert('ERROR: treesPercent plus rocksPercent is TOO HIGH!');
}

maxMapLocations = mapSize * mapSize;
maxTrees = Math.floor(maxMapLocations * treesPercent / 100);
maxRocks = Math.floor(maxMapLocations * rocksPercent / 100);
generate_trees();
generate_rocks();
put_animals_on_map();
put_player_on_map();

}

function is_map_location_available(x,y){
 var result = false;
 if( x>=0 && x<mapSize && y>=0 && y<mapSize ){
  var location = map[x][y];
  result = location.coexist;
 }
 return result;
}

function set_map_location(x,y,obj){
 if(x>=0 && x<mapSize && y>=0 && y<mapSize && is_map_location_available(x,y) == true){
  map[x][y] = obj;
  var image_fn = '';
  var image_tag = '';
  image_tag += '<img src="';
  image_fn = obj.image;
  image_tag += image_fn;
  image_tag += '">';
  $('#map_'+x+'_'+y).html(image_tag);
 }
}

function reset_map_location(x,y){
 if(x>=0 && x<mapSize && y>=0 && y<mapSize && is_map_location_available(x,y) != true){
  var obj = groundGrass;
  map[x][y] = obj;
  var image_fn = '';
  var image_tag = '';
  image_tag += '<img src="';
  image_fn = obj.image;
  image_tag += image_fn;
  image_tag += '">';
  $('#map_'+x+'_'+y).html(image_tag);
 }
}

function generate_trees(){
for(var j = 0; j < maxTrees; j++){
    var x = 0;
    var y = 0;
    x = get_random(mapSize - 1);
    y = get_random(mapSize - 1);
    set_map_location(x,y,groundTree);
}
}

function generate_rocks(){
for(var h = 0; h < maxRocks; h++){
    var x = 0;
    var y = 0;
    x = get_random(mapSize - 1);
    y = get_random(mapSize - 1);
    set_map_location(x,y,groundRock);
}
}

// Returns number between zero and max.
function get_random(max){
var result = 0;
if(!isNaN(max)){
  result = Math.floor(Math.random()*max);
}
return result;
}

var player_name = '';


function question_name(){
 $('#game_setup_form_name').html('What is your name?');
 $('#game_setup_form').show();

 
} 

function populate_player_input_attack(){
 var result = '';
 for(var r = 0; r < choosenAnimals.length; r++){
  var animal = choosenAnimals[r];
  if(animal.alive === true){
   result += '<option value="';
   result += r;
   result += '">';
   result += animal.name;
   result += " (";
   result += mapXLetters[animal.x];
   result += mapYNumbers[animal.y];
   result += ")";
   result += '</option>\n';
  }
 }
 $("#player_input_attack").html(result);
 
}

function populate_game_setup_weapons(num){
 var result = '';
 for(var a = 0; a < weaponArray.length; a++){
  var weapon = weaponArray[a];
  result += '<option value = "';
  result += weapon.type;
  result += '"';
  if( a == num ){
   result += ' selected';
  }
  result += '>';
  result += weapon.name;
  result += '</option>\n';
 }
 $("#game_setup_weapon"+(num+1)).html(result);
}

var animalCount2 = 0;

function populate_game_setup_animals(num){
 var result = '';
 if(animalCount2 >= minAnimals){
  var animal = '';
   result += '<option value = "';
   result += '';
   result += '"';
   result += '>';
   result += '';
   result += '</option>\n';
 }
 for(var a = 0; a < animalArray.length; a++){
  var animal = animalArray[a];
   result += '<option value = "';
   result += animal.type;
   result += '"';
   if( a == num ){
    result += ' selected';
   }
   result += '>';
   result += animal.name;
   result += '</option>\n';
 }
 animalCount2++;
 $("#game_setup_animal"+(num+1)).html(result);
}

function clear_errors(){
 $("#errors").html('');
}

var density = ["Thin", "Normal", "Thick"];

function populate_game_setup_density(){
 var result = '';
 for(var a = 0; a < density.length; a++){
  var densityInfo = density[a];
  result += '<option value = "';
  result += a;
  result += '"';
   if( a == 1 ){
    result += ' selected';
   }
  result += '>';
  result += densityInfo;
  result += '</option>\n';
 }
 $("#game_setup_density").html(result);
}

function show_game_play_questions(){
 populate_player_input_weapon();
 populate_player_input_attack();
 show_player_input();
}


function hide_game_setup_questions(){
 $("#game_setup_area").hide();
}

function show_game_setup_questions(){
 $("#game_setup_area").show();
}

function populate_game_setup_questions(){
 question_name();
 populate_game_setup_density();
 for(var a = 0; a < maxWeapons; a++ ){
  populate_game_setup_weapons(a);
 }
 for(var a = 0; a < maxAnimals; a++ ){
  populate_game_setup_animals(a);
 }
 show_game_setup_questions();
}

// section=0 full map area
// section=1 left side only
// section=2 right side only
function get_random_start_location(section){
 var maxY = mapSize;
 if( section > 0 ){
  maxY = maxY / 2;
 }
 var cnt = 0;
 var result = '';
 do {
  x = get_random(mapSize - 1);
  y = get_random(maxY - 1);
  if( section == 2 ){
   y += (mapSize/2);
  }
  cnt++;
 } while( cnt<100 && !is_map_location_available(x,y) );
 result = x+'|'+y;
 return result;
}

function put_animals_on_map(){
 for(var r = 0; r < choosenAnimals.length; r++){
  var animalObject = choosenAnimals[r];
  var both = get_random_start_location(1);
  var xAndY = both.split('|');
  var x = xAndY[0];
  var y = xAndY[1];
  animalObject.x = x;
  animalObject.y = y;
  set_map_location(x,y,animalObject);
  choosenAnimals[r] = animalObject;
 }
}

function put_player_on_map(){
 var both = get_random_start_location(2);
 var xAndY = both.split('|');
 var x = xAndY[0];
 var y = xAndY[1];
 human.x = x;
 human.y = y;
 set_map_location(x,y,human);
}

function show_player_input(){
 $("#player_input_area").show();
}

function populate_player_input_weapon(){
 var result = '';
 for(var r = 0; r < choosenWeapons.length; r++){
  result += '<option value="';
  var weapon = choosenWeapons[r];
  result += weapon.type;
  result += '">';
  result += weapon.name;
  result += '</option>\n';
 }
 $("#player_input_weapon").html(result);
}

function get_weapon_object_from_type(req_type){
 result = false;
 if(req_type && req_type.length > 0){
  for(var a = 0; a < weaponArray.length; a++){
   var temp_object = weaponArray[a];
   if(temp_object.type == req_type){
    result = temp_object;
   }
  }
 }
 return result;
}

function copy_animal(obj){
 var result = {};
 result.group = obj.group;
 result.type = obj.type;
 result.name = obj.name;
 result.damage = obj.damage;
 result.defence = obj.defence;
 result.range = obj.range;
 result.speed = obj.speed;
 result.health = obj.health;
 result.x = obj.x;
 result.y = obj.y;
 result.coexist = obj.coexist;
 result.alive = obj.alive;
 result.image = obj.image;
 result.deadImage = obj.deadImage;
 result.bigImage = obj.bigImage;
 return result;
}

function get_animal_object_from_type(req_type){
 var result = false;
 if(req_type && req_type.length > 0){
  for(var a = 0; a < animalArray.length; a++){
   // var temp_object = animalArray[a];
   if(animalArray[a].type == req_type){
    result = copy_animal(animalArray[a]);
   }
  }
 }
 return result;
}

function animal_setup(){
 var animal_type1 = $("#game_setup_animal1").val();
 var animal_type2 = $("#game_setup_animal2").val();
 var animal_type3 = $("#game_setup_animal3").val();
 var animal_type4 = $("#game_setup_animal4").val();
 var animal_type5 = $("#game_setup_animal5").val();
 var animal_type6 = $("#game_setup_animal6").val();
 var animalCount = 0;
 var temp_object1 = get_animal_object_from_type(animal_type1);
 if(temp_object1){
   choosenAnimals.push(temp_object1);
   animalCount++;
 }
 var temp_object2 = get_animal_object_from_type(animal_type2);
 if(temp_object2){
   choosenAnimals.push(temp_object2);
   animalCount++;
 }
 var temp_object3 = get_animal_object_from_type(animal_type3);
 if(temp_object3){
   choosenAnimals.push(temp_object3);
   animalCount++;
 }
 var temp_object4 = get_animal_object_from_type(animal_type4);
 if(temp_object4){
   choosenAnimals.push(temp_object4);
   animalCount++;
 }
 var temp_object5 = get_animal_object_from_type(animal_type5);
 if(temp_object5){
   choosenAnimals.push(temp_object5);
   animalCount++;
 }
 var temp_object6 = get_animal_object_from_type(animal_type6);
 if(temp_object6){
   choosenAnimals.push(temp_object6);
   animalCount++;
 }
 return animalCount;
}

function weapon_setup(){
 var weapon_type1 = $("#game_setup_weapon1").val();
 var weapon_type2 = $("#game_setup_weapon2").val();
 var weaponCount = 0;
 var temp_object = get_weapon_object_from_type(weapon_type1);
 if(temp_object){
  choosenWeapons.push(temp_object);
  weaponCount += 1;
 }
 temp_object = get_weapon_object_from_type(weapon_type2);
 if(temp_object){
  choosenWeapons.push(temp_object);
  weaponCount += 1;
 }
 return weaponCount;
}

function density_setup(){
 var densityInfo = $("#game_setup_density").val();
 if(densityInfo == 0){
  treesPercent = Math.ceil(treesPercent / 2);
  rocksPercent = Math.ceil(rocksPercent / 2);
 } else {
  if(densityInfo == 2){
   treesPercent = Math.floor((treesPercent / 3) * 4);
   rocksPercent = Math.floor((rocksPercent / 3) * 4);
  } else {
   
  }
 }
}

function game_setup_mainline(){
 populate_game_setup_questions();
}

function game_init_mainline(){
// validate user answers
 density_setup();
 var errors = [];
 player_name = $('#game_setup_player_name').val();
 human.name = player_name;
 if(player_name.length < 1){
   errors.push('Please enter your name. Thank you!');
 }
 var weaponCount = weapon_setup();
 if(weaponCount < minWeapons){
   errors.push('Please select at least '+minWeapons+' weapons!');
 }
 var animalCount = animal_setup();
 if(animalCount < minAnimals){
alert(animalCount);
   errors.push('Please select at least '+minAnimals+' animals!');
 }
 // if errors, display errors and stop
 // if all ok, then continue in this function
 if( errors.length > 0 ){
  display_init_errors(errors);
 } else {
  clear_errors()
  hide_game_setup_questions();
  initialize_map();
  show_game_play_questions();
  update_stats();
  $("#stats").show()
 }
} 

var playerInputAction = "";

function gameplay_mainline(){
 if(playerInputAction == 'a'){
  human_attack();
 } else {
  human_direction_check();
 }
 clear_errors();
 if(is_error()){
  display_errors();
 } else {
  animalAI();
 }
 update_stats();
 update_player_input_attack();
 check_for_end();
}

function human_direction_check(){
 var x = human.x;
 var y = human.y;
 var newX = x;
 var newY = y;
 switch(playerInputAction){
  case 'n':
   newX = (x*1)-1;
   break;
  case 'e':
   newY = (y*1)+1;
   break;
  case 's':
   newX = (x*1)+1;
   break;
  case 'w':
   newY = (y*1)-1;
   break;
  default:
   if(playerInputAction == 'a'){
    
   } else {
    alert("Invaild Direction");
   }
 }
 if(is_map_location_available(newX,newY)){
  human.x = newX;
  human.y = newY;
  set_map_location(newX,newY,human);
  reset_map_location(x,y);
 }else{
  save_errors("You can't move that way! Select another direction...");
 }
}

function scaling_end_words(){
 var name = human.name;
 var length = name.length;
 var size = 117 - (5 * length);
 if(size < 25){
  size = 25;
  alert("Size is too small!");
 }
 return size;
}

function check_for_end(){
 if(animal_end_check()){
  $('#player_input_area').hide();
  $("#won").html("<p style='font-size: "+scaling_end_words()+"px; color: blue; margin-top: 0.15em'><strong>You WON, "+human.name+"!</strong><a href='http://dev.joel.emerge2.com/game1.php'>Play Again!</a></p>");
  $("#won").show();
 }
 if(human_end_check()){
  $('#player_input_area').hide();
  $("#lose").html("<p style='font-size: "+scaling_end_words()+"px; color: red; margin-top: 0.15em'><strong>You LOSE, "+human.name+"!</strong><a href='http://dev.joel.emerge2.com/game1.php'>Play Again!</a></p>");
  $("#lose").show();
 }
}

function animal_end_check(){
 var count = 0;
 for(var a = 0; a < choosenAnimals.length; a++){
  var animal = choosenAnimals[a];
  if(animal.alive){
   
  } else {
   count++;
  }
 }
 if(count >= choosenAnimals.length){
  return true;
 } else {
  return false;
 }
}

function human_end_check(){
 if(human.health <= 0){
  return true;
 } else {
  return false;
 }
}

var gameplayErrors = [];

function is_error(){
 var result = false;
 if(gameplayErrors.length > 0){
  result = true;
 }
 return result;
}

function save_errors(error){
 gameplayErrors.push(error);
}

function display_errors(){
 var result = '';
 var error = '';
 for(var e = 0; e < gameplayErrors.length; e++){
  result += '<p style= "color: red">';
  error = gameplayErrors[e];
  result += error;
  result += '</p>\n';
 }
 $('#errors').html(result);
 $('#errors').show();
 gameplayErrors = [];
}

function display_init_errors( errors ){
 if(errors.length > 0){
  for( var e=0; e < errors.length; e++){
   save_errors(errors[e]);
  }
  display_errors();
 }
}

function set_map_item(x,y,obj){
 map[x][y] = obj;
 var image_fn = '';
 var image_tag = '';
 image_tag += '<img src="';
 image_fn = obj.image;
 image_tag += image_fn;
 image_tag += '">';
 $('#map_'+x+'_'+y).html(image_tag);
}

function human_attack(){
 var weapon = decode_weapon_choosen();
 var weaponDamage = weapon.damage;
 var weaponRange = weapon.range + 1;
 var weaponDecay = weapon.decay;
 var weaponDefence = weapon.defence;
 var animalNumber = decode_animal_attacked();
 var animal = choosenAnimals[animalNumber];
 var animalDamage = animal.damage;
 var animalRange = animal.range + 1;
 var animalDefence = animal.defence;
 var attackerMultiplier = get_random(14);
 var defenderMultiplier = get_random(6);
 attackerMultiplier - 2;
 defenderMultiplier - 1;
 var attackerDamage = 0;
 var defenderDamage = 0;
 var distance = distance_from_human(animal);
 if(weaponRange > distance){
  if(distance > 1){
   attackerDamage = weaponDamage * weaponDecay / animalDefence * attackerMultiplier * 2;
  } else {
   attackerDamage = weaponDamage / animalDefence * attackerMultiplier * 2;
  }
  if(animalRange > distance){
   defenderDamage = animalDamage / weaponDefence * defenderMultiplier * 2;
  } else {
   animal_move_towards_player(animalNumber);
  }
 } else {
  save_errors("You can't attack that "+animal.name+"! It's too far away!");
 }
 animal.health = Math.round(animal.health - attackerDamage);
 human.health = Math.round(human.health - defenderDamage);
 if(animal.health <= 0){
  animal.image = animal.deadImage;
  var x = animal.x;
  var y = animal.y;
  set_map_item(x,y,animal);
  animal.alive = false;
  update_player_input_attack();
 }
 if(human.health <= 0){
  human.image = human.deadImage;
  var x = human.x;
  var y = human.y;
  set_map_item(x,y,human);
  human.alive = false;
 }
}

function animal_attack(animalNumber){
 var weapon = decode_weapon_choosen();
 var weaponDamage = weapon.damage;
 var weaponRange = weapon.range;
 var weaponDecay = weapon.decay;
 var weaponDefence = weapon.defence;
 var animal = choosenAnimals[animalNumber];
 var animalDamage = animal.damage;
 var animalRange = animal.range;
 var animalDefence = animal.defence;
 var attackerMultiplier = get_random(14);
 var defenderMultiplier = get_random(6);
 attackerMultiplier - 2;
 defenderMultiplier - 1;
 var attackerDamage = 0;
 var defenderDamage = 0;
 var distance = distance_from_human(animal);
 if(animalRange >= distance){
  attackerDamage = animalDamage / weaponDefence * attackerMultiplier * 2;
  if(weaponRange >= distance){
   defenderDamage = weaponDamage / animalDefence * defenderMultiplier * 2;
  }
 } else {
  save_errors("animal: "+animal.name+" can not attack human!");
 }
 animal.health = Math.round(animal.health - defenderDamage);
 human.health = Math.round(human.health - attackerDamage);
 if(animal.health <= 0){
  animal.image = animal.deadImage;
  var x = animal.x;
  var y = animal.y;
  set_map_item(x,y,animal);
  animal.alive = false;
  update_player_input_attack();
 }
 if(human.health <= 0){
  human.image = human.deadImage;
  var x = human.x;
  var y = human.y;
  set_map_item(x,y,human);
  human.alive = false;
  $('#player_input_area').hide();
 }
}

function decode_weapon_choosen(){
 var weaponType = $('#player_input_weapon').val();
 var weaponObject = get_weapon_object_from_type(weaponType);
 return weaponObject;
}

function decode_animal_attacked(){
 var animalNumber = $('#player_input_attack').val();
 return animalNumber;
}

function distance_from_human(animal){
 var totalDistance = 100;
 var humanX = human.x;
 var humanY = human.y;
 var animalX = animal.x;
 var animalY = animal.y;
 var distanceX = humanX - animalX;
 var distanceY = humanY - animalY;
 distanceX = Math.abs(distanceX);
 distanceY = Math.abs(distanceY);
 var distanceXSquared = distanceX * distanceX;
 var distanceYSquared = distanceY * distanceY;
 var totalDistanceSquared = distanceXSquared + distanceYSquared;
 totalDistance = Math.sqrt(totalDistanceSquared);
 return totalDistance;
}



function animal_move_towards_player(animalNumber){
 var animal = choosenAnimals[animalNumber];
 var xDifference = animal.x - human.x;
 var yDifference = animal.y - human.y;
 var xPositive = Math.abs(xDifference);
 var yPositive = Math.abs(yDifference);
 var x = animal.x;
 var y = animal.y;
 var newX = animal.x;
 var newY = animal.y;
 var isXBest = true;
 var done = false;
 var random = get_random(2);
 var choosen = 0;
 if(xPositive > yPositive){
  isXBest = true;
 } else {
  isXBest = false;
 }
 if(isXBest){
  if(xDifference < 0){
   newX++;
  } else {
   newX--;
  }
 } else {
  if(yDifference < 0){
   newY++;
  } else {
   newY--;
  }
 }
 if(newX>=0 && newX<mapSize && newY>=0 && newY<mapSize && is_map_location_available(newX,newY) == true){
  animal_move_control(animalNumber,newX,newY);
 } else {
  newX = animal.x;
  newY = animal.y;
  if(isXBest){
   if(random = 0){
    newY++;
    choosen = 0;
   } else {
    newY--;
    choosen = 1;
   }
  } else {
   if(random = 0){
    newX++;
    choosen = 0;
   } else {
    newX--;
    choosen = 1;
   }
  }
  if(newX>=0 && newX<mapSize && newY>=0 && newY<mapSize && is_map_location_available(newX,newY) == true){
   animal_move_control(animalNumber,newX,newY);
  } else {
   newX = animal.x;
   newY = animal.y;
   if(isXBest){
    if(choosen = 1){
     newY++;
    } else {
     newY--;
    }
   } else {
    if(choosen = 1){
     newX++;
    } else {
     newX--;
    }
   }
   if(newX>=0 && newX<mapSize && newY>=0 && newY<mapSize && is_map_location_available(newX,newY) == true){
    animal_move_control(animalNumber,newX,newY);
   }
  }
 }
}

function animal_move_control(animalNumber,newX,newY){
 var animal = choosenAnimals[animalNumber];
 move_animal(newX,newY,animalNumber);
 reset_map_location(choosenAnimals[animalNumber].x,choosenAnimals[animalNumber].y);
 animal.x = newX;
 animal.y = newY;
}

function move_animal(x,y,animalNumber){
 var animal = choosenAnimals[animalNumber];
 if(x>=0 && x<mapSize && y>=0 && y<mapSize && is_map_location_available(x,y) == true){
  map[x][y] = animal;
  var image_fn = '';
  var image_tag = '';
  image_tag += '<img src="';
  image_fn = animal.image;
  image_tag += image_fn;
  image_tag += '">';
  $('#map_'+x+'_'+y).html(image_tag);
 }
}

function animalAI(){
 var count = 0;
 for(var a = 0; a < choosenAnimals.length; a++){
  var animal = choosenAnimals[a];
  if(animal.alive){
   var distance = distance_from_human(animal);
   if(distance <= animal.range){
    animal_attack(a)
   } else {
    for(var m = 0; m < choosenAnimals[a].speed; m++){
     animal_move_towards_player(a);
    }
   }
  } else {
   count++;
   if(count >= choosenAnimals.length){
    $('#player_input_area').hide();
   }
  }
 }
}

function update_player_input_attack(){
 var result = '';
 for(var r = 0; r < choosenAnimals.length; r++){
  var animal = choosenAnimals[r];
  if(animal.alive === true){
   result += '<option value="';
   result += r;
   result += '"';
   var animalNumber = $('#player_input_attack').val();
   if(animalNumber == r){
    result += ' selected';
   }
   result += '>';
   result += animal.name;
   result += " (";
   result += mapXLetters[animal.x];
   result += mapYNumbers[animal.y];
   result += ")";
   result += '</option>\n';
  }
 }
 $("#player_input_attack").html(result);
}

function update_stats(){
 var result = "";
 result += "<table><tr valign='top'><td><strong><u>";
 result += human.name;
 result += "</strong></u><br><img src ='";
 result += human.bigImage;
 result += "'><br>";
 if(human.alive){
  result += "<p>Health: ";
  result += human.health;
 } else {
  result += "<p style= 'color: red'>DEAD!";
 }
 result += "</p><p>Place: ";
 result += mapXLetters[human.x];
 result += mapYNumbers[human.y];
 result += "</p></td>";
 for(var w = 0; w < choosenWeapons.length; w++){
  var weapon = choosenWeapons[w];
  result += "<td><strong><u>";
  result += weapon.name;
  result += "</u></strong><br><img src = '";
  result += weapon.bigImage;
  result += "'><p>Range: ";
  result += weapon.range;
  result += "</p></td>";
 }
 result += "</tr><tr valign='bottom'>";
 for(var a = 0; a < choosenAnimals.length; a++){
  if(choosenAnimals.length > maxAnimals / 2){
   var spiltingPoint = Math.ceil(choosenAnimals.length / 2);
   if(a == spiltingPoint){
    result += "</tr><tr>";
   }
  }
  var animal = choosenAnimals[a];
  result += "<td><u><strong>";
  result += choosenAnimals[a].name;
  result += "</strong></u><br><img src = '";
  result += choosenAnimals[a].bigImage;
  result += "'>";
  if(animal.alive){
   result += "<p>Health: ";
   result += choosenAnimals[a].health;
  } else {
   result += "<p style= 'color: red'>DEAD!";
  }
  result += "</p><p>Place: ";
  result += mapXLetters[choosenAnimals[a].x];
  result += mapYNumbers[choosenAnimals[a].y];
  result += "</p></td>";
 }
 result += "</tr></table>";
 $("#stats").html(result);
}

$(document).ready(function(){
 game_setup_mainline();
});


</script>
<style>
.nodisplay{display:none;}
.err{color:red;font-weight:bold;}
</style>
</head>
<body>
<h1>Fight! Move! Repeat!</h1>

<table>
<tr>
<td>
<div id="map"></div>
</td>
<td>
</td>
<td>
<div id="stats" class="nodisplay">
</div>
</td>
</tr>
</table>

<div id="errors"></div>

<div id="game_setup_area" class="nodisplay">
<form action="" onsubmit="game_init_mainline(); return false;">
<p>What is your name? <input type="text" id="game_setup_player_name" name="game_setup_player_name" value="" maxLength="10" /></p>
<p>Select your primary weapon: <select id="game_setup_weapon1" name = "game_setup_weapon1" value=""></select></p>
<p>Select your secondary weapon: <select id="game_setup_weapon2" name = "game_setup_weapon2" value=""></select></p>
<p>Select an animal: <select id= "game_setup_animal1" name = "game_setup_animal1" value=""></select></p>
<p>Select an animal: <select id= "game_setup_animal2" name = "game_setup_animal2" value=""></select></p>
<p>Select an animal: <select id= "game_setup_animal3" name = "game_setup_animal3" value=""></select></p>
<p>Select an animal: <select id= "game_setup_animal4" name = "game_setup_animal4" value=""></select></p>
<p>Select an animal: <select id= "game_setup_animal5" name = "game_setup_animal5" value=""></select></p>
<p>Select an animal: <select id= "game_setup_animal6" name = "game_setup_animal6" value=""></select></p>
<p>Select a terrain density: <select id= "game_setup_density" name = "game_setup_density" value=""></select></p>
<input type="submit" id="game_setup_form_button" value="Submit" />
</form>
</div><!-- end of game_setup_area -->

<div id="player_input_area" class="nodisplay">
<form action="" onsubmit="gameplay_mainline(); return false;">
<p id="player_input_where_buttons">Where would you like to move? </p>
<table>
<tr><td></td><td><input type="submit" id="player_input_form_button_north" onclick="playerInputAction='n'" value="North" /></td><td></td></tr>
<tr><td><input type="submit" id="player_input_form_button_west" onclick="playerInputAction='w'" value="West" /></td><td>--Move--</td><td><input type="submit" id="player_input_form_button_east" onclick="playerInputAction='e'" value="East" /></td></tr>
<tr><td></td><td><input type="submit" id="player_input_form_button_south" onclick="playerInputAction='s'" value="South" /></td><td></td></tr>
</table>
<p id="player_input_weapon_text">Which weapon would you like to use? <select id= "player_input_weapon" name = "player_input_weapon"><select></p>
<p id="player_input_attack_text">What would you like to attack? <select id= "player_input_attack" name = "player_input_attack"><select></p>
<input type="submit" id="player_input_form_button_attack" onclick="playerInputAction='a'" value="Attack" />
</form>
</div>

<div id="lose" class="nodisplay"></div>
<div id="won" class="nodisplay"></div>

</body>
</html>
