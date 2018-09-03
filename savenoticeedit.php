		<?php
		include_once "header.php";

		include_once "connection.php";

$sql = "UPDATE notice SET notice_title = '{$_POST['notice_title']}', notice_write = '{$_POST['notice_write']}', date_n= '{$_POST['date_n']}', month_n = '{$_POST['month_n']}', year_n = '{$_POST['year_n']}' WHERE notice.sl= {$_GET['sl']}";



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