<!DOCTYPE html>
<html>
<body>

<form method="get">
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname"><br>
  <button class="sbt-btn" type="submit">thisisgonnawork</button>
</form>

<?php
//Here is the php code to store the user input to the variable

$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$fullname = "$firstname"." "."$lastname";//concatination with a space in between
echo $fullname;
?>
</body>