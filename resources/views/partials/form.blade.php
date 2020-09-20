@extends('style')

    
    @section("title")
    
    @section("content")

        <?php
// define variables and set to empty values
$nameErr1 = $nameErr2 = "";
$name1 = $name2 = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name1"])) {
    $name1Err = "Name is required";
  } else {
    $name1 = $_GET["name1"];
    // check if name only contains letters and whitespace
  }
}
  
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name2"])) {
    $name2Err = "Name is required";
  } else {
    $name2 = $_GET["name2"];
    // check if name only contains letters and whitespace
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Player1: <input type="text" name="name1" value="<?php echo $name1;?>">
  <span class="error">* <?php echo $nameErr1;?></span>
  Player2: <input type="text" name="name2" value="<?php echo $name2;?>">
  <span class="error">* <?php echo $nameErr2;?></span>
  <input class="sub-button" type="submit" name="submit" value="Submit">  
</form>

<div class="list-group"> 
    <h2>Player's names</h2>
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name1;
    echo "<br>";
    echo $name2;
    ?>

</div>

</body>
</html>
    @endsection