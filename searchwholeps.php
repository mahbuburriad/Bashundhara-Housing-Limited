<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $plot = mysqli_query($con, "SELECT * FROM plot WHERE plot.block_no1 LIKE '{$_POST['block_no1']}' AND plot.price BETWEEN '{$_POST['sfrom']}' AND '{$_POST['sto']}' AND plot.plot_for1 LIKE '%sell%'");
      mysqli_close($con);
    }
		?>

<br />
<br />
		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Serial No#</th>
    <th style = "color: blue; background-color: orange; ">Plot Name</th>
    <th style = "color: blue; background-color: orange; ">Plot Size</th>
    <th style = "color: blue; background-color: orange; ">Plot Details</th>
    <th style = "color: blue; background-color: orange; ">Contact Address</th>
    <th style = "color: blue; background-color: orange; ">Plot For</th>
    <th style = "color: blue; background-color: orange; ">Price(/=)</th>
    <th style = "color: blue; background-color: orange; ">From</th>
    
    <th style = "color: blue; background-color: orange; ">Mobile No</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

  <tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($plot as $plots)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $plots['plot_name'];?></td>
    <td><?php echo $plots['plot_size'];?></td>
    <td><?php echo $plots['plot_details'];?></td>
    <td><?php echo ' #F-'.$plots['flat_no1'].', #H-'.$plots['house_no1'].', #R-'.$plots['road_no1'].', #B-'.$plots['block_no1'];?></td>
    <td><?php echo $plots['plot_for1'];?></td>
    <td><?php echo $plots['price'];?></td>
    <td><?php echo $plots['date_a1'].'-'.$plots['month_a1'].'-'.$plots['year_a1'];?></td>
    <td><?php echo $plots['contact_no1'];?></td>
    <td><?php echo $plots['email_id1'];?></td>

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