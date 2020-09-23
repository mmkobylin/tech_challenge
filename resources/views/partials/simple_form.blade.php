<!DOCTYPE html>
<html>
<body>

<form method="get">
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname"><br>
  <button class="sbt-btn" type="submit">thisisgonnawork</button>
</form>

<?php
//Here is the php code to store the user input to the variable

$allPlayers = [];
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
//this is where i collect the variables
collect(array_push($allPlayers, $firstname, $lastname));
//it is actually shuffling!
$randomPlay = (collect($allPlayers)->shuffle()->all());

print_r(($randomPlay[0] . ' vs ' . $randomPlay[1]));
?>
</body>
