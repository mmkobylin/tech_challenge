<!DOCTYPE html>
<html>
<body>

<form method="get">
  Player1:<br>
  <input type="text" name="firstname">
  <br>
  Player2:<br>
  <input type="text" name="lastname"><br>

  Player3:<br>
  <input type="text" name="firstname">
  <br>
  Player4:<br>
  <input type="text" name="lastname"><br>

  <button class="sbt-btn" type="submit">Randomise?</button>
</form>

<?php
//Here is the php code to store the user input to the variable

$allPlayers = [];
$Player1=$_GET['firstname'];
$Player2=$_GET['lastname'];
$Player3=$_GET['firstname'];
$Player4=$_GET['lastname']; 
//this is where i collect the variables
collect(array_push($allPlayers, $Player1, $Player2));
//it is actually shuffling!
$randomPlay = (collect($allPlayers)->shuffle()->all());

print_r(($randomPlay[0] . ' vs ' . $randomPlay[1]))?>
</body>
