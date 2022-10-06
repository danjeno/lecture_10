<!DOCTYPE html>
<html>
<body>

<form method='POST'>
<h1><i>Dont worry about the warnings</i></h1>
<h2>Please input data:</h2>
<label for="name">Name:</label>
<input type="text" name="name"><br>

<label for="surname">Surname:</label>
<input type="text" name="surname"><br>

<label for="surname">Date of birth:</label>
<input type="number" name="birth"><br>

<input type="submit" value="Submit">
</form>

<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$birth = $_POST['birth'];
echo "<h3> OUTPUT: $name, $surname, $birth </h3>";
date_default_timezone_set("Europe/Riga");
echo "<div style=\"text-align:center\">";
echo "© The time is " . date("H:i:s");
?>

</body>
</html>
