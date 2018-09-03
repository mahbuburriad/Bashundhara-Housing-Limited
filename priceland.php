		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $land_owner_list = mysqli_query($con, "SELECT block, SUM(price), MAX(price), MIN(price), COUNT(*) FROM land_owner_list GROUP BY block");
      mysqli_close($con);
    }
		?>

		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
    <th style = "color: blue; background-color: orange; ">Block</th>
    <th style = "color: blue; background-color: orange; ">Total Amount</th>
    <th style = "color: blue; background-color: orange; ">MAX Price</th>
    <th style = "color: blue; background-color: orange; ">MIN Price</th>
    <th style = "color: blue; background-color: orange; ">Total Member</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($land_owner_list as $land_owner_lists)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $land_owner_lists['block'];?></td>
    <td><?php echo $land_owner_lists['SUM(price)'];?></td>
    <td><?php echo $land_owner_lists['MAX(price)'];?></td>
    <td><?php echo $land_owner_lists['MIN(price)'];?></td>
    <td style="align-content: center"><?php echo $land_owner_lists['COUNT(*)'];?></td>
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