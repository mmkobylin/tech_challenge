<?php error_reporting (E_ALL ^ E_NOTICE);

    //declare an empty array for variables
    $allPlayers = [];

    //declare variables that I get from GET method
    $Player1=$_GET['name1'];
    $Player2=$_GET['name2'];
    $Player3=$_GET['name3'];
    $Player4=$_GET['name4']; 
    $Player5=$_GET['name5'];
    $Player6=$_GET['name6'];
    $Player7=$_GET['name7'];
    $Player8=$_GET['name8']; 

    //this is where i collect the variables
    collect(array_push($allPlayers, $Player1, $Player2, $Player3, $Player4, $Player5, $Player6, $Player7, $Player8));

    //this is where i shuffle and collect!
    $randomPlay = (collect($allPlayers)->shuffle()->all());
?>

<!DOCTYPE html>
<html> 
{{-- indentation - body is a child of html --}}
    <body>
        <main>
            <h2> Please enter the players names and press 'Randomise?' ! </h2>
            {{-- this is where I start the form with GET method 
            this is also where we hide the form when it is submitted--}}
            <form class="form-control" method="GET" <?php if ($randomPlay[3] !== NULL){ ?> hidden <?php } ?> action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                {{-- using fieldset for group of related elements in the form  --}}
                <fieldset class="card-body">
                {{-- Cross-Site Request Forgery Token --}}
                    @csrf
                    {{-- creating first column, they have to be in separate sections --}}
                    <section class="column">
                    {{-- this is  where we collect the player's names--}}
                        <div class="players-field">
                            <label>Player 1:</label><br>
                            <input type="text" name="name1" value="<?php echo $name1;?>" required>
                        </div>
                        
                        <div class="players-field">
                            <label>Player 2:</label><br>
                            <input type="text" name="name2" value="<?php echo $name2;?>" required>
                        </div>
                    </section>

                    <section class="column">

                        <div class="players-field">
                            <label>Player 3:</label><br>
                            <input type="text" name="name3" value="<?php echo $name3;?>" required>
                        </div>

                        <div class="players-field">
                            <label>Player 4:</label><br>
                            <input type="text" name="name4" value="<?php echo $name4;?>" required>
                        </div>

                    </section>   
                    {{-- pressing this button collects the data --}}
                    <button class="button" type="submit">Randomise?</button>
                </fieldset>
            </form>

            {{-- this is where we hide the columns if we have no players --}}
            <section class="column-results" <?php if ($randomPlay[3] === NULL){ ?> hidden <?php } ?>>

            {{-- are players randomize and present? if so, we have a match --}}
                <h3 class="match">MATCH 1 :</h3>
                <div class="player">
                    {{-- this is where we display player - if it is NULL, it does not display anything --}}
                    <p><?php print_r($randomPlay[0]) ?></p>
                
                    {{-- this is where we are displaying the scores --}}
                    <input type="number" id="score" name="score" placeholder="0" min="0" max="21">
                </div>

                <p class="versus">vs</p>

                <div class="player">
                    <p><?php print_r($randomPlay[1]) ?></p>
                    <input type="number" id="score" name="score" placeholder="0" min="0" max="21">
                </div>
            </section>

            <section class="column-results" <?php if ($randomPlay[3] === NULL){ ?> hidden <?php   } ?>>

                <h3 class="match">MATCH 2 :</h3>
                <div class="player">
                    {{-- this is where we display player - if it is NULL, it does not display anything --}}
                    <p><?php print_r($randomPlay[2]) ?></p>
                
                    {{-- this is where we are displaying the scores --}}
                    <input type="number" id="score" name="score" placeholder="0" min="0" max="21">
                </div>

                <p class="versus">vs</p>

                <div class="player">
                    <p><?php print_r($randomPlay[3]) ?></p>
                    <input type="number" id="score" name="score" placeholder="0" min="0" max="21">
                </div>

            </section>
            <nav>
                <h4> <a class="navbar-brand" href="/" <?php if ($randomPlay[3] === NULL){ ?> hidden <?php } ?>>PLAY AGAIN?!</a></h4>
            </nav>
        <main>
    </body>
</html>