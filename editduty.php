		<?php
		include_once "header.php";

		include_once "connection.php";

		if(!mysqli_connect_errno())
    {
      $duty = mysqli_query($con, "SELECT * FROM duty WHERE duty.did= {$_GET['did']}");
      mysqli_close($con);
    }

		foreach($duty as $dutys)
		

?>


 


		<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="duty" method="post" action="savedutyedit.php?did=<?php echo "{$_GET['did']}" ?>">
<p>
	
	<strong>For</strong>
	<select name="fors" value="<?php echo $dutys['fors'];?>" style="width:80px; padding:3px; border-radius: 8px;">
<option value="guard" selected>Guard</option>
<option value="cleaner">Cleaner</option>
</select>
</p>
	<strong>Block</strong>
	<input type="text" name= "block" value="<?php echo $dutys['block'];?>" placeholder="Enter block" style="width:100px; padding:5px; border-radius: 8px;" />
	</p>
	<p>
		<strong>Road</strong>
		<strong></strong>
		<input type="text" name= "rfrom" value="<?php echo $dutys['rfrom'];?>" placeholder="From" style="width:90px; padding:5px;"  />
		<strong></strong>
		<input type="text" name= "rto" value="<?php echo $dutys['rto'];?>" placeholder="To" style="width:90px; padding:5px;"  />
	</p>
	<p>
		<strong>Time</strong>
		<strong></strong>
		<input type="text" name= "tfrom" value="<?php echo $dutys['tfrom'];?>" placeholder="From" style="width:90px; padding:5px;"  />
		<strong></strong>
		<input type="text" name= "tto" value="<?php echo $dutys['tto'];?>" placeholder="To" style="width:90px; padding:5px;"  />
	</p>
	<strong>From Date</strong>
	<input type="text" name= "date" value="<?php echo $dutys['date'];?>" placeholder="Date" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "month" value="<?php echo $dutys['month'];?>" placeholder="Month" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year" value="<?php echo $dutys['year'];?>" placeholder="Year" style="width:100px; padding:5px;" />
	</p>
	<strong>To Date</strong>
	<input type="text" name= "date_t" value="<?php echo $dutys['date_t'];?>" placeholder="Date" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "month_t" value="<?php echo $dutys['month_t'];?>" placeholder="Month" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year_t" value="<?php echo $dutys['year_t'];?>" placeholder="Year" style="width:100px; padding:5px;" />
	</p>

	<p>

<input type="submit" name="submit" value="Update" />
<input type="reset" name="reset"  value="Reset" /><br />
</select>
</p>



</form>

</body>

</p>
</p>
</p>
</div>
</div>
</body>
</html>

<?php
    include_once "under.php";
    ?>