<?php error_reporting (E_ALL ^ E_NOTICE);

    //declare an empty array for variables
    $allPlayers4 = [];

    //declare variables that I get from GET method
    $Player1=$_GET['name1'];
    $Player2=$_GET['name2'];
    $Player3=$_GET['name3'];
    $Player4=$_GET['name4']; 

    //this is where i collect the variables
    collect(array_push($allPlayers4, $Player1, $Player2, $Player3, $Player4));

    //this is where i shuffle and collect!
    $randomPlay = (collect($allPlayers4)->shuffle()->all());

?>

<!DOCTYPE html>
<html> 
    {{-- indentation - body is a child of html --}}
    <body>
        <main>
            {{-- this is where I start the form with GET method 
            this is also where we hide the form when it is submitted--}}
            <form class="form-control" method="GET" <?php if ($allPlayers4[3] !== NULL){ ?> hidden <?php } ?> action="four_game"> 
                {{-- I am using fieldset for group of related elements in the form  --}}
                <fieldset class="card-body">
                {{-- Cross-Site Request Forgery Token --}}
                    @csrf
                    {{-- creating first column --}}
                    <section class="column">
                    {{-- this is  where we get the player's names--}}
                        <div class="players-field">
                            <label>Player 1:</label><br>
                            <input type="text" name="name1" value=""  minlength="2" maxlength="10" required>
                        </div>
                        
                        <div class="players-field">
                            <label>Player 2:</label><br>
                            <input type="text" name="name2" value=""  minlength="2" maxlength="10" required>
                        </div>
                    </section>

                    <section class="column">

                        <div class="players-field">
                            <label>Player 3:</label><br>
                            <input type="text" name="name3" value=""  minlength="2" maxlength="10" required>
                        </div>

                        <div class="players-field">
                            <label>Player 4:</label><br>
                            <input type="text" name="name4" value=""  minlength="2" maxlength="10" required>
                        </div>

                    </section>  

                    {{-- pressing this button collects the data --}}
                    <button class="button" type="submit">Randomise?</button>
                </fieldset>
            </form>

            {{-- this is where we hide the column with the matches if we have no players --}}
            <section class="column" <?php if ($randomPlay[3] === NULL){ ?> hidden <?php } ?>> 

                {{-- are players randomize and present? if so, we have a match --}}
                <div class="match">

                    <h3>MATCH 1 :</h3>
                    <div class="player">
                        {{-- this is where we display player--}}
                        <p><?php print_r($randomPlay[0]) ?></p>
                    
                        {{-- this is where we are displaying the scores --}}
                        <div class="number-input">
                            {{-- onclick method used to change the score by substracting 1 --}}
                            <button class="minus" type="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            {{-- input represents the scores, min 0, max 11 --}}
                            <input class="quantity" min="0" max="11" name="quantity" placeholder="0" type="number">
                            {{-- onclick method used to change the score by adding 1 --}}
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>

                    <p>vs</p>

                    <div class="player">
                        <p><?php print_r($randomPlay[1]) ?></p>
                        <div class="number-input">
                            <button class="minus" type="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" max="11" name="quantity" placeholder="0" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="column" <?php if ($randomPlay[3] === NULL){ ?> hidden <?php } ?>> 

                <div class="match">

                    <h3>MATCH 2 :</h3>
                    <div class="player">
                        <p><?php print_r($randomPlay[2]) ?></p>
                    
                        <div class="number-input">
                            <button class="minus" type="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" max="11" name="quantity" placeholder="0" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>

                    <p>vs</p>

                    <div class="player">
                        <p><?php print_r($randomPlay[3]) ?></p>
                        <div class="number-input">
                            <button class="minus" type="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" max="11" name="quantity" placeholder="0" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>
                </div>

            </section>
            
            <nav>
                {{-- directory takes back to the home screen --}}
                <h4> <a class="navbar-brand" href="/">TRY AGAIN ? !</a></h4>
            </nav>
        </main>
    </body>
</html>

<script>
    //this is where we make sure the names are unique
    //declaring the variables by taking querySelector from input[type=text]
    var form = document.querySelector('form.form-control');
    var players = form.querySelectorAll('input[type=text]');

//stopping the form from automatically submitting
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var playersArray = [];
    // if the name repeats, change background to green
        for(var i = 0; i < players.length; i++) {
            if(playersArray.indexOf(players[i].value) != -1) {
                players[i].style.backgroundColor = "chartreuse";
                return false;
            }
    //otherwisde submit form
            else
                playersArray.push(players[i].value);
        }
        form.submit();
    });

//if the input field is in the focus change the background to black
    for(var j = 0; j < players.length; j++) {
        players[j].addEventListener('focus', function() {
            this.style.backgroundColor = "black";
        });
    }
</script>