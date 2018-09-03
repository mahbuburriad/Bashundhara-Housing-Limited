<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $apartment = mysqli_query($con, "SELECT * FROM apartment WHERE apartment.price BETWEEN '{$_POST['sfrom']}' AND '{$_POST['sto']}' AND apartment.apartment_for LIKE '%sell%' ORDER BY apartment.price ASC");
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
    <th style = "color: blue; background-color: orange; ">Apartment Name</th>
    <th style = "color: blue; background-color: orange; ">Flat Size(sq/Ft)</th>
    <th style = "color: blue; background-color: orange; ">Bed</th>
    <th style = "color: blue; background-color: orange; ">Kitchen</th>
    <th style = "color: blue; background-color: orange; ">Balcony</th>
    <th style = "color: blue; background-color: orange; ">Site</th>
    <th style = "color: blue; background-color: orange; ">Washroom</th>
    <th style = "color: blue; background-color: orange; ">Apartment Details</th>
    <th style = "color: blue; background-color: orange; ">Address</th>
    <th style = "color: blue; background-color: orange; ">Apartment For</th>
    <th style = "color: blue; background-color: orange; ">Price(/=)</th>
    <th style = "color: blue; background-color: orange; ">From</th>
    <th style = "color: blue; background-color: orange; ">Mobile No</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

  <tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($apartment as $apartments)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $apartments['apartment_name'];?></td>
    <td><?php echo $apartments['flat_size'];?></td>
    <td><?php echo $apartments['bed'];?></td>
    <td><?php echo $apartments['kitchen'];?></td>
    <td><?php echo $apartments['balcony'];?></td>
    <td><?php echo $apartments['site'];?></td>
    <td><?php echo $apartments['washroom'];?></td>
    <td><?php echo $apartments['apartment_details'];?></td>
    <td><?php echo ' #F-'.$apartments['flat_no'].', #H-'.$apartments['house_no'].', #R-'.$apartments['road_no'].', #B-'.$apartments['block_no'];?></td>
    <td><?php echo $apartments['apartment_for'];?></td>
    <td><?php echo $apartments['price'];?></td>
    <td><?php echo $apartments['date_a'].'-'.$apartments['month_a'].'-'.$apartments['year_a'];?></td>
    <td><?php echo $apartments['contact_no'];?></td>
    <td><?php echo $apartments['email_id'];?></td>

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