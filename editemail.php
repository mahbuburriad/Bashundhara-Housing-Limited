		<?php
		include_once "header.php";

		include_once "connection.php";

		if(!mysqli_connect_errno())
    {
      $email = mysqli_query($con, "SELECT * FROM email WHERE email.eid= {$_GET['eid']}");
      mysqli_close($con);
    }

		foreach($email as $emailsss)
		

?>


 


		<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="email" method="post" action="saveemailedit.php?eid=<?php echo "{$_GET['eid']}" ?>">
<strong>From</strong>
	<select name="fromemail" style="width:150px; padding:3px; border-radius: 8px;">
<option value="land_owner">Land Owner</option>
</select>
</p>
<p>
<strong>To</strong>
	<select name="reciever" style="width:150px; padding:3px; border-radius: 8px;">
<option value="manager" selected>Manager/Admin</option>
<option value="land_owner">Land Manager</option>
<option value="security">Security Officer</option>
<option value="guard">Guard</option>
<option value="cleaner">Cleaner</option>
<option value="guest">Guest</option>
</select>
</p>
<p>
	<strong>Email Subject</strong><br />
	<input type="text" name= "subject" placeholder="Enter Email Subject" style="width:600px; padding:5px; border-radius: 8px;" />
	</p>
	<p>
		<strong>Email</strong><br />
		<textarea name="ebody" cols="60" rows="60" placeholder="Enter your mail to admin" ></textarea>
	</p>
	<strong>Today's Date</strong>
	<input type="text" name= "date_e" placeholder="Date" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "month_e" placeholder="Month" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year_e" placeholder="Year" style="width:100px; padding:5px;" />
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
</div>
</div>
</body>
</html>

<?php
    include_once "under.php";
    ?>