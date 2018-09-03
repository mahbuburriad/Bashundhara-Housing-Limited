<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $stuff_list = mysqli_query($con, "SELECT * FROM stuff_list WHERE stuff_list.first_name LIKE '%{$_POST['first_name']}%' OR stuff_list.last_name LIKE '%{$_POST['first_name']}%'");
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
    <th style = "color: blue; background-color: orange; ">First Name</th>
    <th style = "color: blue; background-color: orange; ">User ID</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; ">Password</th>
    <th style = "color: blue; background-color: orange; ">Gender</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Salary</th>
    <th style = "color: blue; background-color: orange; ">Birthday</th>
    <th style = "color: blue; background-color: orange; ">Stuff As</th>
    <th style = "color: blue; background-color: orange; ">Address</th>
    
    <th style = "color: blue; background-color: orange; ">Edit | Delete</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($stuff_list as $stuff_lists)
    { ?>
    <tr>
    <<td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $stuff_lists['first_name'].' '.$stuff_lists['last_name'];?></td>
    <td><?php echo $stuff_lists['user_id'];?></td>
    <td><?php echo $stuff_lists['email'];?></td>
    <td><?php echo $stuff_lists['password'];?></td>
    <td><?php echo $stuff_lists['gender'];?></td>
    <td><?php echo $stuff_lists['mobileno'];?></td>
    <td><?php echo $stuff_lists['salary'];?></td>
    <td><?php echo $stuff_lists['date'].'-'.$stuff_lists['month'].'-'.$stuff_lists['year'];?></td>
    <td><?php echo $stuff_lists['stuffas'];?></td>
    <td><?php echo ' #F-'.$stuff_lists['Flat'].', #house-'.$stuff_lists['House'].', #R-'.$stuff_lists['Road'].', #Th-'.$stuff_lists['Thana'].', #D-'.$stuff_lists['District'].', #C-'.$stuff_lists['Country'];?></td>
    <td>
    <a style="vertical-align: middle;" href="editstuff.php?id=<?php echo $stuff_lists['id']; ?>"><img src="resources\image\edit.ico" alt="Edit" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    <a style="vertical-align: middle;" href="deletestuff.php?id=<?php echo $stuff_lists['id']; ?>"><img src="resources\image\delete.png" alt="Delete" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
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