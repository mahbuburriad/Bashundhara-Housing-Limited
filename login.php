<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Login</title>
	</head>
	<body>
		<?php
$db['hostname'] = "localhost";
$db['username']= "root";
$db['password']= "";
$db['database']="bashundhara_housing_limited";


$con = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);

if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
			
			if ($db) {
				$select_db = mysql_select_db($db_name);
				
				if ($select_db) {
					$email = $_POST['email'];
					$password = $_POST['password'];
					
					$query = "SELECT id FROM guest_list WHERE email = '$email' and password = '$password'";
					
					$result = mysql_query($query);
					
					if ($result) {
						$row = mysql_fetch_array ($result);
						
						$_SESSION['id'] = $row['id'];
						
							header("Location: guest-profile.php");
						}
					} else {
						echo mysql_error();
					}
					
					mysqli_close($connect);
				}
				else {
					echo mysql_error();
				}
			}
		?>
	</body>
</html>