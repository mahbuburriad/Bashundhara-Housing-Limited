		<?php
		include_once "header.php";

		include_once "connection.php";

		if(!mysqli_connect_errno())
    {
      $notice = mysqli_query($con, "SELECT * FROM notice WHERE notice.sl= {$_GET['sl']}");
      mysqli_close($con);
    }

		foreach($notice as $notices)
		

?>


 


		<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="notice" method="post" action="savenoticeedit.php?sl=<?php echo "{$_GET['sl']}" ?>">
<p>
	<strong>Notice Title</strong><br />
	<input type="text" name= "notice_title" value="<?php echo $notices['notice_title'];?>" placeholder="Enter Notice Title" style="width:600px; padding:5px; border-radius: 8px;" />
	</p>
	<p>
		<strong>Notice</strong><br />
		<textarea name="notice_write" value="<?php echo $notices['notice_write'];?>" cols="60" rows="60" ></textarea>
	</p>
	<strong>Today's Date</strong>
	<input type="text" name= "date_n" value="<?php echo $notices['date_n'];?>" placeholder="Date" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "month_n" value="<?php echo $notices['month_n'];?>" placeholder="Month" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year_n" value="<?php echo $notices['year_n'];?>" placeholder="Year" style="width:100px; padding:5px;" />
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