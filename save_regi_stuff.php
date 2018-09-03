		<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO stuff_regi
		(first_name2,last_name2,user_id2,email2, gender2,month2,date2,year2,mobileno2, stuffas2, session, year,ssc, school, hsc,college,graduate,university,Flat2,House2,Road2, Thana2, District2, Country2)
		VALUES('".$_POST['first_name2']."','".$_POST['last_name2']."','".$_POST['user_id2']."','".$_POST['email2']."','".$_POST['gender2']."','".$_POST['month2']."','".$_POST['date2']."','".$_POST['year2']."','".$_POST['mobileno2']."','".$_POST['stuffas2']."','".$_POST['session']."','".$_POST['year']."','".$_POST['ssc']."','".$_POST['school']."','".$_POST['hsc']."','".$_POST['college']."','".$_POST['graduate']."','".$_POST['university']."','".$_POST['Flat2']."','".$_POST['House2']."','".$_POST['Road2']."','".$_POST['Thana2']."','".$_POST['District2']."','".$_POST['Country2']."');";

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