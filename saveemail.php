		<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO email (fromemail,reciever,subject,ebody,date_e,month_e,year_e) VALUES('".$_POST['fromemail']."','".$_POST['reciever']."','".$_POST['subject']."','".$_POST['ebody']."','".$_POST['date_e']."','".$_POST['month_e']."','".$_POST['year_e']."');";
		if(mysqli_query($con, $sql))
		{
			?>

			<div style="width: 100%;">
			<img src="resources\image\8.jpg" alt="Success Icon" style=" margin: 200px;"/>
			<h1 style="color: white;">Thanks for send email and operation is successful</h1>
				
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