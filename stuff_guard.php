		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $stuff_guard = mysqli_query($con, "SELECT * FROM stuff_list ORDER BY id ASC");
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
  <form name="mobileno" method="post" style="float: left;" action="searchmobile.php">
  <strong>Mobile No</strong>
  <input type="text" name= "mobileno" value="+8801" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </p>
  </form>
  <p>
    <form name="name" method="post" style="float: left;" action="searchname.php">
      <strong>Name</strong>
  <input type="text" name= "first_name" placeholder="Enter name" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
    </form>
  </p>
    <p>
<form name="searchstuff" method="post" style="float: right;" action="searchstuffas.php">

<strong>Stuff As</strong>
  <select name="stuffas" style="width:150px; padding:2px; border-radius: 8px;">
<option value="manager" selected>Manager</option>
<option value="land_manager">Land Manager</option>
<option value="security">Security Officer</option>
<option value="guard">Guard</option>
<option value="cleaner">Cleaner</option>
</select>
<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
</p>
</form>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
    <th style = "color: blue; background-color: orange; ">Name</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Stuff As</th>
    <th style = "color: blue; background-color: orange; ">Address</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($stuff_guard as $stuff_guards)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $stuff_guards['first_name'].' '.$stuff_guards['last_name'];?></td>
    <td><?php echo $stuff_guards['mobileno'];?></td>
    <td><?php echo $stuff_guards['stuffas'];?></td>
    <td><?php echo ' #F-'.$stuff_guards['Flat'].', #house-'.$stuff_guards['House'].', #R-'.$stuff_guards['Road'].', #Th-'.$stuff_guards['Thana'].', #D-'.$stuff_guards['District'].', #C-'.$stuff_guards['Country'];?></td>
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