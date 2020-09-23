@extends('style')

    
    @section("title")
    
    @section("content")

<?php
// define variables and set to empty values
$nameError = "All fields are required!";
$name1 = $name2 = $name3 = $name4 = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name1"])) {
    $nameError;
  } else {
    $name1 = test_input($_GET["name1"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name2"])) {
    $nameError;
  } else {
    $name2 = test_input($_GET["name2"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name3"])) {
    $nameError;
  } else {
    $name3 = test_input($_GET["name3"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name4"])) {
    $nameError;
  } else {
    $name4 = test_input($_GET["name4"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form class="form-control" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <fieldset class="card-body">
      @csrf
      <div class="players-field">
        <label>Player 1:  <input type="text" name="name1" value="<?php echo $name1;?>" required>
      </div>
      <div class="players-field">
        <label>Player2: <input type="text" name="name2" value="<?php echo $name2;?>" required>
      </div>
      <div class="players-field">
        <label>Player3: <input type="text" name="name3" value="<?php echo $name3;?>" required>
      </div>
      <div class="players-field">
        <label>Player4: <input type="text" name="name4" value="<?php echo $name4;?>" required>
      </div>
      <span class="error"><?php echo $nameError;?></span><br><br>
    </fieldset>
  <br>
  <input class="sub-btn" type="submit" name="submit" value="Randomize?">  
</form>
</div> 
<section>
  <h3>Matches:</h4>
<div class="list-group"> 
    <?php
      // this is where we declare an empty array where we will put player's names.
        $allPlayers = [];
        $randomPlay= [];
        collect(array_push($allPlayers, $name1, $name2, $name3, $name4));

        function randomise($allPlayers) {
            $randomPlay = collect($allPlayers)->shuffle()->all();
              return $randomPlay[0] . " vs ". $randomPlay[1] . " Match 2: ". $randomPlay[2] . " vs " . $randomPlay[3];
        };

    //this is where we checking if the players are entered
    print_r((randomise($allPlayers) === " vs " . " Match 2: ". " vs ") ?
        "Please enter names!" : "Match 1: " . randomise($allPlayers) //it does not want the ; HERE!!
    );

    ?>
</section>

</body>
</html>


    @endsection