		<?php
include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO apartment (apartment_name,flat_size,bed,kitchen,balcony,site,washroom,apartment_details,flat_no,house_no,road_no,block_no,apartment_for,price,date_a,month_a,year_a,contact_no,email_id) VALUES('".$_POST['apartment_name']."','".$_POST['flat_size']."','".$_POST['bed']."','".$_POST['kitchen']."','".$_POST['balcony']."','".$_POST['site']."','".$_POST['washroom']."','".$_POST['apartment_details']."','".$_POST['flat_no']."','".$_POST['house_no']."','".$_POST['road_no']."','".$_POST['block_no']."','".$_POST['apartment_for']."','".$_POST['price']."','".$_POST['date_a']."','".$_POST['month_a']."','".$_POST['year_a']."','".$_POST['contact_no']."','".$_POST['email_id']."');";
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