		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $plot = mysqli_query($con, "SELECT * FROM plot WHERE plot.plot_for1 LIKE '%Rent%' ORDER BY date_a1 DESC");
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
<form name="price" method="post" style="float: left;" action="searchpriceb.php">
<strong>Price</strong>
  <input type="text" name= "sfrom" placeholder="From" style="width:90px; padding:5px; border-radius: 8px;" />
  <strong></strong>
  <input type="text" name= "sto" placeholder="To" style="width:90px; padding:5px; border-radius: 8px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </p>
  </form>

  <form name="price" method="post" style="float: left;" action="searchwholep.php">
  <strong>Whole Search</strong>
<select name="block_no1" style="width:50px; padding:3px; border-radius: 8px;">
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



<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
</p>
</form>
    <p>
<form name="searchblock" method="post" style="float: right;" action="searchblockp.php">

<strong>Block</strong>
<select name="block_no1" style="width:50px; padding:3px; border-radius: 8px;">
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