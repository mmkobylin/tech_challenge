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
  }
}
  
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name2"])) {
    $name2Err = "Name is required";
  } else {
    $name2 = $_GET["name2"];
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
  <h2 class="label">Player1: <input type="text" name="name1" value="<?php echo $name1;?>">
  <h2 class="label">Player2: <input type="text" name="name2" value="<?php echo $name2;?>">
  <br>
  <input class="sub-btn" type="submit" name="submit" value="Ready?">  
</form>

<h3>Player's names:</h2>
<div class="list-group"> 
    <?php
        echo $name1;
        echo "<br>";
        echo $name2;
    ?>

</div>

</body>
</html>
    @endsection