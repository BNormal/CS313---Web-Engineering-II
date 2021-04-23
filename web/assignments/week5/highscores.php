<?php

$dbUser = '';
$dbPassword = '';
$dbName = '';
$dbHost = '';
$dbPort = '5432';
try
{
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
	echo "Error connecting to DB. Details: $ex";
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Highscores</title>
</head>

<body>
<div>

<h1>User Info</h1>

<?php

$statement = $db->prepare("SELECT id, username, password, display_name FROM public.user");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{

	echo '<p>';
	echo '<strong>' . $row['id'] . ' ' . $row['username'] . ':';
	echo $row['password'] . '</strong>' . ' - ' . $row['display_name'];
	echo '</p>';
}
?>


</div>

</body>
</html>