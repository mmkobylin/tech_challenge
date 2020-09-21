@extends('style')

    
    @section("title")
    
    @section("content")

<?php
// define variables and set to empty values
$nameError = "All names are required";
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
    <label>Player 1:  <input type="text" name="name1" value="<?php echo $name1;?>">
    <span class="error"><?php echo $nameError;?></span><br><br>

    <label>Player2: <input type="text" name="name2" value="<?php echo $name2;?>">
    <span class="error"><?php echo $nameError;?></span><br><br>

    <label>Player3: <input type="text" name="name3" value="<?php echo $name3;?>">
    <span class="error"><?php echo $nameError;?></span><br><br>

    <label>Player4: <input type="text" name="name4" value="<?php echo $name4;?>">
    <span class="error"><?php echo $nameError;?></span><br><br>

  <br>
  <input class="sub-btn" type="submit" name="submit" value="Randomize?">  
</form>
</div>

</body>
</html>
    @endsection