<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<!DOCTYPE html>
<html>
<body>

<form method="get">
  Player1:<br>
  <input type="text" name="firstname">
  <br>
  Player2:<br>
  <input type="text" name="lastname"><br>

    <div class="players-field">
        <label>Player3: <input type="text" name="name3" value="<?php echo $name3;?>" required>
    </div>
      <div class="players-field">
        <label>Player4: <input type="text" name="name4" value="<?php echo $name4;?>" required>
      </div>


  <button class="sbt-btn" type="submit">Randomise?</button>
</form>

<?php

//declare an empty array for variables
$allPlayers = [];

//declare variables that I get from GET method
$Player1=$_GET['firstname'];
$Player2=$_GET['lastname'];
$Player3=$_GET['name3'];
$Player4=$_GET['name4']; 

//this is where i collect the variables
collect(array_push($allPlayers, $Player1, $Player2, $Player3, $Player4));

//this is where i shuffle and collect!
$randomPlay = (collect($allPlayers)->shuffle()->all());

print_r('MATCH 1:')?> <br> <?php
print_r($randomPlay[0] . ' vs ' . $randomPlay[1]);?>
<br>
<?php
print_r(' and '); ?> <br> <?php
print_r('MATCH 2:')?><br>
<?php
print_r($randomPlay[2] . ' vs '. $randomPlay[3])?>
</body>
