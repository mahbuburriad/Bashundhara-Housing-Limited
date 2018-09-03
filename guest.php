		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $guest_list = mysqli_query($con, "SELECT * FROM guest_list ORDER BY id ASC");
      mysqli_close($con);
    }
    else 
		?>

		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<h3 style="color: red">Search BY</h3>
  <p>
  <form name="mobileno" method="post" style="float: left;" action="searchmobileguest.php">
  <strong>Mobile No</strong>
  <input type="text" name= "mobileno" value="+8801" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </form>
  </p>
  
  <p>
    <form name="name" method="post" style="float: right;" action="searchnameguest.php">
      <strong>Name</strong>
  <input type="text" name= "first_name" placeholder="Enter name" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
    </form>
    <p>
        <a style="width: 100px; padding: 3px; font-size: 1.2em; border-radius: 30px; cursor: pointer; background-color: silver;" href="totalmemberg.php">Total Member</a>
  </p>



<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
  <th style = "color: blue; background-color: orange; ">ID</th>
    <th style = "color: blue; background-color: orange; ">Name</th>
    <th style = "color: blue; background-color: orange; ">User ID</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; ">Password</th>
    <th style = "color: blue; background-color: orange; ">Gender</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Birthday</th>
    <th style = "color: blue; background-color: orange; ">Address</th>
    <th style = "color: blue; background-color: orange; ">Edit | Delete</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($guest_list as $guest_lists)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $guest_lists['id'];?></td>
    <td><?php echo $guest_lists['first_name'].' '.$guest_lists['last_name'];?></td>
    <td><?php echo $guest_lists['user_id'];?></td>
    <td><?php echo $guest_lists['email'];?></td>
    <td><?php echo $guest_lists['password'];?></td>
    <td><?php echo $guest_lists['gender'];?></td>
    <td><?php echo $guest_lists['mobileno'];?></td>
    <td><?php echo $guest_lists['date'].'-'.$guest_lists['month'].'-'.$guest_lists['year'];?></td>
    <td><?php echo ' #F-'.$guest_lists['Flat'].', #house-'.$guest_lists['House'].', #R-'.$guest_lists['Road'].', #Th-'.$guest_lists['Thana'].', #D-'.$guest_lists['District'].', #C-'.$guest_lists['Country'];?></td>
        <td>
    <a style="vertical-align: middle;" href="editguest.php?id=<?php echo $guest_lists['id']; ?>"><img src="resources\image\edit.ico" alt="Edit" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    <a style="vertical-align: middle;" href="deleteguest.php?id=<?php echo $guest_lists['id']; ?>"><img src="resources\image\delete.png" alt="Delete" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
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