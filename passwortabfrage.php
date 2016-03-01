<html>
<body>
<h1><u>Passwortabfrage</u></h1>
<br>

<form action="passwortabfrage.php" method="post">
Benutzername:
<input type="text" name="benutzername"><br /><br />

Passwort:
<input type="password" name="passwort"><br /><br />
<input type="submit" name="absenden" value="Einloggen!">

<h1><u>Registrieren</u></h1>
Vorname: <input type="text" name="reg_vorname" value="Max"><br>
Nachname: <input type="text" name="reg_nachname" value="Mustermann"><br>
Geschlecht: <input type="checkbox" name="reg_sex_male" value="M‰nnlich">Maennlich
<input type="checkbox" name="reg_sex_woman" value="Weiblich">Weiblich<br>
Geburtsdatum: <input type="date" max="1950-12.31">
<h3><u>Adresse</u></h3>
Straﬂe: <input type="text" name="street"><br>
PLZ: <input type="text" name="plz"><br>
Wohnort: <input type="text" name="city"><br>

<br><br>
</form>
 
</body>
</html>

<?php
$username = $_POST["benutzername"];
$passwort = $_POST["passwort"];
$submit = $_POST["absenden"];

if(empty($username)){
	echo 'Du musst dein Username noch angeben !<br>';
}
if(empty($passwort)){
	echo 'Du musst dein Passwort noch angeben !';
}

if ($username == "Jonah" AND $passwort == "123")
{
	echo '<h1>Deine Angaben waren richtig!</h1>';
}else{
	echo '<h1>Deine Angaben waren falsch!</h1>';
}

?>
