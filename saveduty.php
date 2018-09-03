		<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO duty (fors,rfrom,rto,tfrom,tto,date,month,year,date_t,month_t,year_t,block) VALUES('".$_POST['fors']."','".$_POST['rfrom']."','".$_POST['rto']."','".$_POST['tfrom']."','".$_POST['tto']."','".$_POST['date']."','".$_POST['month']."','".$_POST['year']."','".$_POST['date_t']."','".$_POST['month_t']."','".$_POST['year_t']."','".$_POST['block']."');";
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