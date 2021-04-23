<html>
	<body>
		NAME: <?php echo $_POST["name"]; ?><br>
		<?php $email = $_POST["email"]; ?>
		EMAIL: <?php echo $email; ?> 
		<?php echo "<a href='mailto:" . $email . "?body=Hello%20again'>Send Mail</a>"; ?><br>
		MAJOR: <?php echo $_POST["major"]; ?><br>
		COUNTRIES VISITED: 
		<?php
			
  			if(empty($_POST['countries'])) {
    			echo("None");
  			} else {
				$visisted = $_POST['countries'];
    			$N = count($visisted);
    			for($i=0; $i < $N; $i++) {
      				echo($visisted[$i] . " ");
    			}
  			}
		?>
		<br>
		COMMENTS: <?php echo $_POST["comments"]; ?>
	</body>
</html>