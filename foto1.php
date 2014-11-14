<?php

$db = new PDO('mysql:host=localhost;dbname=person;charset=utf8', 'root', '');

$db->query("INSERT INTO person (Namn, Kön, Ålder, Hemstad) VALUES('$_POST['name']','$_POST['gender']','$_POST['age']','$_POST['city']')");

$name = $_POST['name'];
echo $name;
$gender = $_POST['gender'];
echo $gender;
$age = $_POST['age'];
echo $age;
$city = $_POST['city'];
echo $city;

?>
<html>
<head>
</head>
<body>
<h2>Laboration 3.1.4</h2>

 <div style="margin: 100px auto 0;width: 300px;">
	<h3>Formulär</h3>
		<form name="myform" id="myform" method="post">
			<fieldset>
				Ditt namn<input type="text" name="name" value="Ditt Namn" /><br />
				Kille/Tjej?<input type="text" name="gender" value="Kille/Tjej?" /><br />
				Din Ålder<input type="text" name="age" value="Din Ålder" /><br />
				Din Hemstad<input type="text" name="city" value="Din Hemstad" /><br />
				Ditt namn<input type="text" name="username" value="Ditt Namn" /><br />
    
				<br /><br />
			<br />
			<input type="submit" value="submit">
			</fieldset>
		</form>
</div>


</body>
</html>