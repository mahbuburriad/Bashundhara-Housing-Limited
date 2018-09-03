		<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO notice (notice_title,notice_write,date_n,month_n,year_n) VALUES('".$_POST['notice_title']."','".$_POST['notice_write']."','".$_POST['date_n']."','".$_POST['month_n']."','".$_POST['year_n']."');";
		if(mysqli_query($con, $sql))
		{
			?>

			<div style="width: 100%;">
			<img src="resources\image\8.jpg" alt="Success Icon" style=" margin: 200px;"/>
			<h1 style="color: white;">Thanks for posting notice and operation is successful</h1>
				
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