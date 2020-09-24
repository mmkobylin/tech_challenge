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

{{-- <?php
print_r('MATCH 1:   ')?> <br>  --}}
<h3><?php
print_r(($randomPlay[0] . ' vs ' . $randomPlay[1] === ' vs ') ? 'Please enter the names' : ('MATCH 1:' . $randomPlay[0] . ' vs ' . $randomPlay[1]));?>
<br></h3>
<?php
print_r(' and '); ?> <br> 
{{-- <?php
print_r('MATCH 2:   ')?> --}}
<h3><?php
print_r(($randomPlay[2] . ' vs ' . $randomPlay[3] === ' vs ') ? "click 'Randomise' to play!" : ('MATCH 2:' . $randomPlay[1] . ' vs ' . $randomPlay[2]));?>
</body>