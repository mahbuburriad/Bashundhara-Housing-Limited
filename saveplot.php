		<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO plot (plot_name,plot_size, price,plot_details,flat_no1,house_no1,road_no1,block_no1,plot_for1,date_a1,month_a1,year_a1,contact_no1,email_id1) VALUES('".$_POST['plot_name']."','".$_POST['plot_size']."','".$_POST['price']."','".$_POST['plot_details']."','".$_POST['flat_no1']."','".$_POST['house_no1']."','".$_POST['road_no1']."','".$_POST['block_no1']."','".$_POST['plot_for1']."','".$_POST['date_a1']."','".$_POST['month_a1']."','".$_POST['year_a1']."','".$_POST['contact_no1']."','".$_POST['email_id1']."');";
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