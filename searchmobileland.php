<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $land_owner_list = mysqli_query($con, "SELECT * FROM land_owner_list WHERE land_owner_list.mobileno = '{$_POST['mobileno']}'");
      mysqli_close($con);
    }
		?>

<br />
<br />
		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

		<table>
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
    <th style = "color: blue; background-color: orange; ">Present Address at BHL</th>
    <th style = "color: blue; background-color: orange; ">Pervious Address</th>
    <th style = "color: blue; background-color: orange; ">Edit | Delete</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($land_owner_list as $land_owner_lists)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $land_owner_lists['id'];?></td>
    <td><?php echo $land_owner_lists['first_name'].' '.$land_owner_lists['last_name'];?></td>
    <td><?php echo $land_owner_lists['user_id'];?></td>
    <td><?php echo $land_owner_lists['email'];?></td>
    <td><?php echo $land_owner_lists['password'];?></td>
    <td><?php echo $land_owner_lists['gender'];?></td>
    <td><?php echo $land_owner_lists['mobileno'];?></td>
    <td><?php echo $land_owner_lists['date'].'-'.$land_owner_lists['month'].'-'.$land_owner_lists['year'];?></td>
    <td><?php echo ' #F-'.$land_owner_lists['Flat_L'].', #H-'.$land_owner_lists['House_L'].', #R-'.$land_owner_lists['Road_L'].', #B-'.$land_owner_lists['block'];?></td>
    <td><?php echo ' #F-'.$land_owner_lists['Flat'].', #H-'.$land_owner_lists['House'].', #R-'.$land_owner_lists['Road'].', #Th-'.$land_owner_lists['Thana'].', #D-'.$land_owner_lists['District'].', #C-'.$land_owner_lists['Country'];?></td>

    <td>
    <a style="vertical-align: middle;" href="editlandowner.php?id=<?php echo $land_owner_lists['id']; ?>"><img src="resources\image\edit.ico" alt="Edit" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    <a style="vertical-align: middle;" href="deleteland.php?id=<?php echo $land_owner_lists['id']; ?>"><img src="resources\image\delete.png" alt="Delete" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
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