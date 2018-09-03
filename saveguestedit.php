		<?php
		include_once "header.php";

		include_once "connection.php";

$sql = "UPDATE guest_list SET first_name = '{$_POST['first_name']}', last_name = '{$_POST['last_name']}', user_id = '{$_POST['user_id']}', email = '{$_POST['email']}', password = '{$_POST['password']}', gender = '{$_POST['gender']}', month ='{$_POST['month']}', date = '{$_POST['date']}', year='{$_POST['year']}', mobileno = '{$_POST['mobileno']}', Flat = '{$_POST['Flat']}', House = '{$_POST['House']}', Road = '{$_POST['Road']}', Thana = '{$_POST['Thana']}', District = '{$_POST['District']}', Country = '{$_POST['Country']}' WHERE guest_list.id= {$_GET['id']}";



if(mysqli_query($con, $sql))
		{
			?>

			<div style="width: 100%;">
			<img src="resources\image\8.jpg" alt="Success Icon" style=" margin: 200px;"/>
			<h1 style="color: white;">Update Successfull </h1>
				
			</div>



			<?php
		}

		else
		{
			echo "Error Updating Record: ". $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con); ?>
</p>
</p>
</div>
</div>
</body>
</html>

<?php
    include_once "under.php";
    ?>