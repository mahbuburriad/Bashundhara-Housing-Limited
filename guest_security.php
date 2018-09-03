		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $guest_security = mysqli_query($con, "SELECT * FROM guest_list ORDER BY id ASC");
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
  </p>
  
<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
    <th style = "color: blue; background-color: orange; ">First Name</th>
    <th style = "color: blue; background-color: orange; ">User ID</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; ">Gender</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Address</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($guest_security as $guest_securitys)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $guest_securitys['first_name'].' '.$guest_securitys['last_name'];?></td>
    <td><?php echo $guest_securitys['user_id'];?></td>
    <td><?php echo $guest_securitys['email'];?></td>
    <td><?php echo $guest_securitys['gender'];?></td>
    <td><?php echo $guest_securitys['mobileno'];?></td>
    <td><?php echo ' #F-'.$guest_securitys['Flat'].', #house-'.$guest_securitys['House'].', #R-'.$guest_securitys['Road'].', #Th-'.$guest_securitys['Thana'].', #D-'.$guest_securitys['District'].', #C-'.$guest_securitys['Country'];?></td>

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