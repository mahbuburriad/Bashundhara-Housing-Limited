		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $stuff_regi = mysqli_query($con, "SELECT * FROM stuff_regi");
      mysqli_close($con);
    }
		?>

		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<h3 style="color: red">Search BY</h3>
<form name="session" method="post" style="float: left;" action="searchssession.php">
<strong>Session</strong>
  <select name="session" style="width:100px; padding:3px; border-radius: 8px;">
<option value="Spring" selected>Spring</option>
<option value="Summer">Summer</option>
<option value="Fall">Fall</option>
</select>

<strong>Year</strong>
  <input type="text" name= "year" placeholder="YY" style="width:50px; padding:5px;"  />
  <strong>Stuff As</strong>
  <select name="stuffas2" style="width:150px; padding:3px; border-radius: 8px;">
<option value="manager" selected>Manager</option>
<option value="land_manager">Land Manager</option>
<option value="security">Security</option>
<option value="guard">Guard</option>
<option value="cleaner">Cleaner</option>
</select>
<strong>Minimum CGPA</strong>
  <input type="text" name= "graduate" placeholder="University CGPA" style="width:150px; padding:5px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
</form>
    <a style="width: 100px; padding: 3px; font-size: 1.2em; border-radius: 30px; cursor: pointer; background-color: silver;" href="totalregi.php">Total Registration</a>
  </p>
</form>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
    <th style = "color: blue; background-color: orange; ">Name</th>
    <th style = "color: blue; background-color: orange; ">User ID</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; ">Gender</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Birthday</th>
    <th style = "color: blue; background-color: orange; ">Stuff As</th>
    <th style = "color: blue; background-color: orange; ">Session</th>
    <th style = "color: blue; background-color: orange; ">SSC</th>
    <th style = "color: blue; background-color: orange; ">HSC</th>
    <th style = "color: blue; background-color: orange; ">Graduate</th>
    <th style = "color: blue; background-color: orange; ">Address</th>
    <th style = "color: blue; background-color: orange; ">Add</th>
    <th style = "color: blue; background-color: orange; ">Delete</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($stuff_regi as $stuff_regis)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $stuff_regis['first_name2'].' '.$stuff_regis['last_name2'];?></td>
    <td><?php echo $stuff_regis['user_id2'];?></td>
    <td><?php echo $stuff_regis['email2'];?></td>
    <td><?php echo $stuff_regis['gender2'];?></td>
    <td><?php echo $stuff_regis['mobileno2'];?></td>
    <td><?php echo $stuff_regis['date2'].'-'.$stuff_regis['month2'].'-'.$stuff_regis['year2'];?></td>
    <td><?php echo $stuff_regis['stuffas2'];?></td>
    <td><?php echo $stuff_regis['session'].'-'.$stuff_regis['year'];?></td>
    <td><?php echo $stuff_regis['ssc'].'-'.$stuff_regis['school'];?></td>

    <td><?php echo $stuff_regis['hsc'].'-'.$stuff_regis['college'];?></td>
    <td><?php echo $stuff_regis['graduate'].'-'.$stuff_regis['university'];?></td>
    <td><?php echo ' #F-'.$stuff_regis['Flat2'].', #house-'.$stuff_regis['House2'].', #R-'.$stuff_regis['Road2'].', #Th-'.$stuff_regis['Thana2'].', #D-'.$stuff_regis['District2'].', #C-'.$stuff_regis['Country2'];?></td>

    <td>
    <a style="vertical-align: middle;" href="cregi.php?id=<?php echo $stuff_regis['id']; ?>"><img src="resources\image\t.png" alt="Edit" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    </td>
    <td>
    <a style="vertical-align: middle;" href="deletestuffregi.php?id=<?php echo $stuff_regis['id']; ?>"><img src="resources\image\delete.png" alt="Delete" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    </td>
      </tr>
      <?php
      $sl_no++;
  } ;?>
  
</tbody> 
</table>
</p>
</p>
</div>
</div>
</body>
</html>

<?php
    include_once "under.php";
    ?>