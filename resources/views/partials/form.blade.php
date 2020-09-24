<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<!DOCTYPE html>
<html>
<body>

<form class="form-control" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <fieldset class="card-body">
      @csrf
        <div class="column">

            <div class="players-field">
                <label>Player 1:</label><br>
                <input type="text" name="firstname" value="<?php echo $firstname;?>" required>
            </div>
            
            <div class="players-field">
                <label>Player 3:</label><br>
                <input type="text" name="lastname" value="<?php echo $lastname;?>" required>
            </div>
        </div>

        <div class="column">

            <div class="players-field">
                <label>Player 2:</label><br>
                <input type="text" name="name3" value="<?php echo $name3;?>" required>
            </div>

            <div class="players-field">
                <label>Player 4:</label><br>
                <input type="text" name="name4" value="<?php echo $name4;?>" required>
            </div>
        </div>       
        <button class="button" type="submit">Randomise?</button>
    </fieldset>
</form>

<?php

//declare an empty array for variables
$allPlayers = [];

//declare variables that I get from GET method
$Player1=$_GET['firstname'];
$Player3=$_GET['lastname'];
$Player2=$_GET['name3'];
$Player4=$_GET['name4']; 

//this is where i collect the variables
collect(array_push($allPlayers, $Player1, $Player2, $Player3, $Player4));

//this is where i shuffle and collect!
$randomPlay = (collect($allPlayers)->shuffle()->all());
?>
    <br>
    <div class="column">
    {{-- are players randomize and present? if so, we have a match --}}
        <h3 class="match"><?php print_r(($randomPlay[0] !== NULL && $randomPlay[1] !== NULL ) ?  'MATCH 1 :' : NULL ) ?></h3>
        {{-- this is where we display player - if it is NULL, it does not display anything --}}
            <p class="player"><?php print_r($randomPlay[0]) ?></p>
        {{-- if we dont have a match, we don't need versus --}}
            <p class="versus"><?php print_r(($randomPlay[0] === NULL || $randomPlay[1] === NULL ) ?  'Please enter the names' : ' vs ') ?></p>
            <p class="player"><?php print_r($randomPlay[1]) ?></p>
    </div>
    <div class="column">
        <h3 class="match"><?php print_r(($randomPlay[2] !== NULL && $randomPlay[3] !== NULL ) ?  'MATCH 2 :' : NULL ) ?></h3>
            <p class="player"><?php print_r($randomPlay[2]) ?></p>
            <p class="versus"><?php print_r(($randomPlay[2] === NULL || $randomPlay[3] === NULL ) ?  " click 'Randomise?' to play!" : ' vs ') ?></p>
            <p class="player"><?php print_r($randomPlay[3]) ?></p>
    </div>
</body>