		<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO stuff_list
		(first_name,last_name,user_id,email,password, gender,month,date,year,mobileno, salary,stuffas, Flat,House,Road, Thana, District, Country)
		VALUES('".$_POST['first_name2']."','".$_POST['last_name2']."','".$_POST['user_id2']."','".$_POST['email2']."','".$_POST['password']."','".$_POST['gender2']."','".$_POST['month2']."','".$_POST['date2']."','".$_POST['year2']."','".$_POST['mobileno2']."', '".$_POST['salary']."','".$_POST['stuffas2']."','".$_POST['Flat2']."','".$_POST['House2']."','".$_POST['Road2']."','".$_POST['Thana2']."','".$_POST['District2']."','".$_POST['Country2']."');";

		if(mysqli_query($con, $sql))
		{
			?>

			<div style="width: 100%;">
			<img src="resources\image\8.jpg" alt="Success Icon" style=" margin: 200px;"/>
			<h1 style="color: white;">Thanks for sing up and your sing up is successful</h1>
				
			</div>

			<?php
		}

		else
		{
			echo "Error: ". $sql . "<br>" . mysqli_error($con);
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