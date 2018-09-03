		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $stuff_guest = mysqli_query($con, "SELECT * FROM stuff_list");
      mysqli_close($con);
    }
		?>

		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>



<p>
<form name="searchstuff" method="post" style="float: right;" action="searchstuffas.php">

<strong style="color: white">Stuff As</strong>
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
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($stuff_guest as $stuff_guests)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $stuff_guests['first_name'].' '.$stuff_guests['last_name'];?></td>
    <td><?php echo $stuff_guests['mobileno'];?></td>
    <td><?php echo $stuff_guests['stuffas'];?></td>
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