<?php 
global $name3;
global $name4; 
?>

<?php
//this is where we check if it is set up
if(isset($name3)){echo $name3;}
if(isset($name4)){echo $name4;}
?>
{{-- <fieldset>

    <div class="players-field">
        <label>Player3: <input type="text" name="name3" value="<?php echo $name3;?>" required>
    </div>

</fieldset> --}}

<?php
// Set Variable as Blank 
$name3 = isset($name3) ? $name3 : '';
$name4= isset($name4) ? $name4: '';
echo $name3;
?>
