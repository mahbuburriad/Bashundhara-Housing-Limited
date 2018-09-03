		<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO land_owner_list
		(first_name,last_name,user_id,email,password, gender,month,date,year,mobileno,Flat_L, House_L, Road_L, block,price,Flat,House,Road, Thana, District, Country)
		VALUES('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['user_id']."','".$_POST['email']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['month']."','".$_POST['date']."','".$_POST['year']."','".$_POST['mobileno']."','".$_POST['Flat_L']."','".$_POST['House_L']."','".$_POST['Road_L']."','".$_POST['block']."','".$_POST['price']."','".$_POST['Flat']."','".$_POST['House']."','".$_POST['Road']."','".$_POST['Thana']."','".$_POST['District']."','".$_POST['Country']."');";

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