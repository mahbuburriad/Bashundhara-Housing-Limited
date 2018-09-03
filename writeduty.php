		<?php
		include_once "header.php";
		?>


<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="duty" method="post" action="saveduty.php">
<p>
	<p>
	
	<strong>For</strong>
	<select name="fors" style="width:80px; padding:3px; border-radius: 8px;">
<option value="guard" selected>Guard</option>
<option value="cleaner">Cleaner</option>
</select>
</p>
	<strong>Block</strong>
	<input type="text" name= "block" placeholder="Enter block" style="width:100px; padding:5px; border-radius: 8px;" />
	</p>
	<p>
		<strong>Road</strong>
		<strong></strong>
		<input type="text" name= "rfrom" placeholder="From" style="width:90px; padding:5px;"  />
		<strong></strong>
		<input type="text" name= "rto" placeholder="To" style="width:90px; padding:5px;"  />
	</p>
	<p>
		<strong>Time</strong>
		<strong></strong>
		<input type="text" name= "tfrom" placeholder="From" style="width:90px; padding:5px;"  />
		<strong></strong>
		<input type="text" name= "tto" placeholder="To" style="width:90px; padding:5px;"  />
	</p>
	<strong>From Date</strong>
	<input type="text" name= "date" placeholder="Date" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "month" placeholder="Month" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year" placeholder="Year" style="width:100px; padding:5px;" />
	</p>
	<strong>To Date</strong>
	<input type="text" name= "date_t" placeholder="Date" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "month_t" placeholder="Month" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year_t" placeholder="Year" style="width:100px; padding:5px;" />
	</p>
	<p>
	<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" /><br />
</p>
	</form>

</p>
</p>
</div>
</div>
</body>
</html>

<?php
    include_once "under.php";
    ?>