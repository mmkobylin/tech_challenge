@extends('style')

    
    @section("title")
    
    @section("content")

<?php
// define variables and set to empty values
$nameError = "All fields are required!";
$name1 = $name2 = $name3 = $name4 = $name5 = $name6 = $name7 = $name8 = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name6"])) {
    $nameError;
  } else {
    $name6 = test_input($_GET["name6"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name7"])) {
    $nameError;
  } else {
    $name7 = test_input($_GET["name7"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name8"])) {
    $nameError;
  } else {
    $name8 = test_input($_GET["name8"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name5"])) {
    $nameError;
  } else {
    $name5 = test_input($_GET["name5"]);
  }
}

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
      <div class="players-field">
        <label>Player 5:  <input type="text" name="name5" value="<?php echo $name5;?>" required>
      </div>
      <div class="players-field">
        <label>Player6: <input type="text" name="name6" value="<?php echo $name6;?>" required>
      </div>
      <div class="players-field">
        <label>Player7: <input type="text" name="name7" value="<?php echo $name7;?>" required>
      </div>
      <div class="players-field">
        <label>Player8: <input type="text" name="name8" value="<?php echo $name8;?>" required>
      </div>
      <br><br>
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
  
// Condition to check array is empty or not 
 
     if(empty($allPlayers)) {
        echo "Please insert your players' names!";
     } 

        array_push($allPlayers, $name1, $name2, $name3, $name4, $name5, $name6, $name7, $name8);

        function randomise($allPlayers) {

            $randomPlay = collect($allPlayers)->shuffle()->all(); {

            return 
              "Match 1: " . $randomPlay[0] . " vs " . $randomPlay[1] . " Match  2: " . $randomPlay[2] . " vs " . $randomPlay[3]
              . " Match 3: " . $randomPlay[4] . " vs " . $randomPlay[5] . " Match 4: " . $randomPlay[6] . " vs " . $randomPlay[7];
            }
         }

      {{-- <li> <a class="navbar-brand" href="/form">Join us</a></li> --}}


     if(empty($allPlayers)) {
        echo "Please insert your players' names!";
     } else {
       echo randomise($allPlayers);
     }
  

    ?>
</section>

</body>
</html>


    @endsection