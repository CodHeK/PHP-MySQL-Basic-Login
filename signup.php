<!DOCTYPE html>
<html>
<head>
	<title>ThankYou</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($name)) {
		if(!empty($email)) {
			if(!empty($password)) {
				$dbc = mysqli_connect('localhost', 'root', '', 'login')
					or die('Error conencting to DataBase1');

				$query = "INSERT INTO userDetails (name, email, password) VALUES ('$name', '$email', '$password');";

				$result = mysqli_query($dbc, $query)
					or die('Error connecting to DataBase2');

				mysqli_close($dbc);

				echo '<div class="container">', '<br>';
				echo '<h1>ThankYou ', $name, ' For Submitting Form</h1>', '<br>';
				echo '<a href="index.html" class="btn btn-primary" style="text-decoration: none;">BACK TO SIGNUP!</a>', '<br>';
				echo '</div>', '<br>'; 

			}
			else {
				echo 'Enter Your Password';
			}
		}
		else {
			echo 'Enter Your Email';
		}
	}
	else {
		echo 'Enter Your Name';
	}
?>
</body>
</html>