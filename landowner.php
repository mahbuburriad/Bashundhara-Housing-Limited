		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $land_owner_list = mysqli_query($con, "SELECT * FROM land_owner_list ORDER BY id ASC");
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
  <form name="mobileno" method="post" style="float: right;" action="searchmobileland.php">
  <strong>Mobile No</strong>
  <input type="text" name= "mobileno" value="+8801" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </form>
  </p>



  <p>
    <form name="land" method="post" style="float: right;" action="searchland.php">
      <strong>Land:</strong>
<strong></strong>
  <input type="text" name= "Flat_L" placeholder="Flat" style="width:70px; padding:5px;" />

  <strong></strong>
  <input type="text" name= "House_L" placeholder="House" style="width:70px; padding:5px;" />

  <strong></strong>
  <input type="text" name= "Road_L" placeholder="Road" style="width:70px; padding:5px;" />
<strong></strong>
<select name="block" style="width:50px; padding:3px; border-radius: 8px;">
<option value="A" selected>A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
<option value="I">I</option>
<option value="J">J</option>
<option value="K">K</option>
<option value="L">L</option>
<option value="M">M</option>
<option value="N">N</option>
<option value="O">O</option>
<option value="P">P</option>
<option value="Q">Q</option>
<option value="R">R</option>
<option value="S">S</option>
<option value="T">T</option>
<option value="U">U</option>
<option value="V">V</option>
<option value="W">W</option>
<option value="X">X</option>
<option value="Y">Y</option>
<option value="Z">Z</option>

</select>
<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
    </form>
  </p>
  
  <p>
    <form name="name" method="post" style="float: left;" action="searchnameland.php">
      <strong>Name</strong>
  <input type="text" name= "first_name" placeholder="Enter name" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
    </form>
  </p>
  <p>
  <br />
    <a style="width: 100px; padding: 3px; font-size: 1.2em; border-radius: 30px; cursor: pointer; background-color: silver;" href="priceland.php">Total Amount</a>
  </p>

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
    <th style = "color: blue; background-color: orange; ">Price</th>
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
    <td><?php echo $land_owner_lists['price'];?></td>
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