		<?php
		include_once "header.php";

		include_once "connection.php";

$sql = "UPDATE duty SET fors = '{$_POST['fors']}', rfrom = '{$_POST['rfrom']}', rto = '{$_POST['rto']}', tfrom = '{$_POST['tfrom']}', tto = '{$_POST['tto']}', month ='{$_POST['month']}', date = '{$_POST['date']}', year='{$_POST['year']}', date_t = '{$_POST['date_t']}', month_t = '{$_POST['month_t']}', year_t = '{$_POST['year_t']}', block = '{$_POST['block']}' WHERE duty.did= {$_GET['did']}";



if(mysqli_query($con, $sql))
		{
			?>

			<div style="width: 100%;">
			<img src="resources\image\8.jpg" alt="Success Icon" style=" margin: 200px;"/>
			<h1 style="color: white;">Update Successful </h1>
				
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