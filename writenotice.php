		<?php
		include_once "header.php";
		?>


<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="notice" method="post" action="savenotice.php">
<p>
	<strong>Notice Title</strong><br />
	<input type="text" name= "notice_title" placeholder="Enter Notice Title" style="width:600px; padding:5px; border-radius: 8px;" />
	</p>
	<p>
		<strong>Notice</strong><br />
		<textarea name="notice_write" cols="60" rows="60" placeholder="Enter Notice" ></textarea>
	</p>
	<strong>Today's Date</strong>
	<input type="text" name= "date_n" placeholder="Date" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "month_n" placeholder="Month" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year_n" placeholder="Year" style="width:100px; padding:5px;" />
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