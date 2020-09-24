<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<!DOCTYPE html>
<html>
<body>

<form class="form-control" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <fieldset class="card-body">
      @csrf
        <div class="players-field">
            <label>Player 1:</label>
            <input type="text" name="firstname" value="<?php echo $firstname;?>" required>
        </div>
        
        <div class="players-field">
            <label>Player2:</label>
            <input type="text" name="lastname" value="<?php echo $lastname;?>" required>
        </div>

        <div class="players-field">
            <label>Player3:</label>
            <input type="text" name="name3" value="<?php echo $name3;?>" required>
        </div>

        <div class="players-field">
            <label>Player4:</label>
            <input type="text" name="name4" value="<?php echo $name4;?>" required>
        </div>
        
        <button class="button" type="submit">Randomise?</button>
    </fieldset>
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
?>
    <br>
    <div>
        <h3 class="match"><?php print_r(($randomPlay[0] !== NULL && $randomPlay[1] !== NULL ) ?  'MATCH 1 :' : NULL ) ?></h3>
            <p class="player"><?php print_r($randomPlay[0]) ?></p>
            <p class="versus"><?php print_r(($randomPlay[0] === NULL || $randomPlay[1] === NULL ) ?  'Please enter the names' : ' vs ') ?></p>
            <p class="player"><?php print_r($randomPlay[1]) ?></p>
        

        <h3 class="match"><?php print_r(($randomPlay[2] !== NULL && $randomPlay[3] !== NULL ) ?  'MATCH 2 :' : NULL ) ?></h3>
            <p class="player"><?php print_r($randomPlay[2]) ?></p>
            <p class="versus"><?php print_r(($randomPlay[2] === NULL || $randomPlay[3] === NULL ) ?  "and click 'Randomise?' to play!" : ' vs ') ?></p>
            <p class="player"><?php print_r($randomPlay[3]) ?></p>
    </div>
</body>