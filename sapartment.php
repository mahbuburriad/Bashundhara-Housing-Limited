		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $apartment = mysqli_query($con, "SELECT * FROM apartment WHERE apartment.apartment_for LIKE '%sell%' ORDER BY date_a DESC");
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
<form name="price" method="post" style="float: left;" action="searchpricea.php">
<strong>Price</strong>
  <input type="text" name= "sfrom" placeholder="From" style="width:90px; padding:5px; border-radius: 8px;" />
  <strong></strong>
  <input type="text" name= "sto" placeholder="To" style="width:90px; padding:5px; border-radius: 8px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </p>
  </form>

  <form name="price" method="post" style="float: left;" action="searchwholea.php">
  <strong>Whole Search</strong>
<select name="block_no" style="width:50px; padding:3px; border-radius: 8px;">
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
<strong></strong>
  <input type="text" name= "sfrom" placeholder="Price From" style="width:90px; padding:5px; border-radius: 8px;" />
  <strong></strong>
  <input type="text" name= "sto" placeholder="Price To" style="width:90px; padding:5px; border-radius: 8px;" />

  <strong></strong>
  <input type="text" name= "bed" placeholder="Bed" style="width:90px; padding:5px; border-radius: 8px;" />
  <strong></strong>

  <strong></strong>
  <input type="text" name= "washroom" placeholder="Washroom" style="width:90px; padding:5px; border-radius: 8px;" />
  <strong></strong>



<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
</p>
</form>
    <p>
<form name="searchblock" method="post" style="float: right;" action="searchblocka.php">

<strong>Block</strong>
<select name="block_no" style="width:50px; padding:3px; border-radius: 8px;">
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
</p>
</form>

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