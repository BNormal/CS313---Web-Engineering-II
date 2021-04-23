<html>
	<head>
	</head>
	<body>
		<form action="welcome.php" method="post">
  			Name: <input type="text" name="name" placeholder="John"><br>
  			Email: <input type="text" name="email" placeholder="someone@example.com"><br><br>
			<label for="male">Major:</label><br>
			<input type="radio" name="major" value="Computer Science"> Computer Science<br>
  			<input type="radio" name="major" value="Web Design and Development"> Web Design and Development<br>
  			<input type="radio" name="major" value="Computer information Technology"> Computer information Technology<br>
			<input type="radio" name="major" value="Computer Engineering"> Computer Engineering<br><br>
			<label for="male">Countries visited:</label><br>
			<input name="countries[]" type="checkbox" value="North America"> North America<br>
			<input name="countries[]" type="checkbox" value="South America"> South America<br>
			<input name="countries[]" type="checkbox" value="Europe"> Europe<br>
			<input name="countries[]" type="checkbox" value="Asia"> Asia<br>
			<input name="countries[]" type="checkbox" value="Australia"> Australia<br>
			<input name="countries[]" type="checkbox" value="Africa"> Africa<br>
			<input name="countries[]" type="checkbox" value="Antarctica"> Antarctica<br><br>
			<textarea name="comments" placeholder="Comments..."></textarea><br><br>
			<input type="submit">
		</form>
	</body>
</html>