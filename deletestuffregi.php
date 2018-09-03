		<?php
		include_once "header.php";

		include_once "connection.php";

$sql = "DELETE FROM stuff_regi WHERE stuff_regi.id= '{$_GET['id']}'";

if(mysqli_query($con, $sql))
		{
			?>

			<div style="width: 100%;">
			<img src="resources\image\8.jpg" alt="Success Icon" style=" margin: 200px;"/>
			<h1 style="color: white;">delete Successfull </h1>
				
			</div>

			<?php
		}

		else
		{
			echo "Error delating Data: ". $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con); ?>
<?php
		include_once "under.php";
		?>