		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $land_owner_guard = mysqli_query($con, "SELECT * FROM land_owner_guard ORDER BY id ASC");
      mysqli_close($con);
    }
		?>

		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>



<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
  <th style = "color: blue; background-color: orange; ">ID</th>
    <th style = "color: blue; background-color: orange; ">Name</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Address</th>

    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($land_owner_guard as $land_owner_guards)
    { ?>
    <tr>
    <<td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $land_owner_guards['id'];?></td>
    <td><?php echo $land_owner_guards['first_name'].' '.$land_owner_guards['last_name'];?></td>
    <td><?php echo $land_owner_guards['mobileno'];?></td>
    <td><?php echo ' #F-'.$land_owner_guards['Flat_L'].', #H-'.$land_owner_guards['House_L'].', #R-'.$land_owner_guards['Road_L'].', #B-'.$land_owner_guards['block'];?></td>
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