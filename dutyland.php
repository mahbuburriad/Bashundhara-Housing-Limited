		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $duty = mysqli_query($con, "SELECT * FROM duty ORDER BY date ASC");
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
<form name="date" method="post" style="float: left;" action="searchdatenaa.php">
<strong>Date</strong>
  <input type="text" name= "date" placeholder="Date" style="width:50px; padding:5px;"  />

  <strong></strong>
  <input type="text" name= "month" placeholder="Month" style="width:50px; padding:5px;" />

  <strong></strong>
  <input type="text" name= "year" placeholder="Year" style="width:50px; padding:5px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </p>
  </form>
  <form name="date" method="post" style="float: left;" action="dutyadminaa.php">
  <strong>Block</strong>
  <input type="text" name= "block" placeholder="Enter block" style="width:100px; padding:5px; border-radius: 8px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
    <a style="width: 100px; padding: 3px; font-size: 1.2em; border-radius: 30px; cursor: pointer; background-color: silver;" href="totalduty.php">Duty</a>
  </p>
</form>
<br />
<br />
<br />
<p>

<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Serial No#</th>
    <th style = "color: blue; background-color: orange; ">For</th>
    <th style = "color: blue; background-color: orange; ">Block</th>
    <th style = "color: blue; background-color: orange; ">Road</th>
    <th style = "color: blue; background-color: orange; ">Time</th>
    <th style = "color: blue; background-color: orange; ">From Date</th>
    <th style = "color: blue; background-color: orange; ">To Date</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

  <tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($duty as $dutys)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $dutys['fors'];?></td>
    <td><?php echo $dutys['block'];?></td>
    <td><?php echo $dutys['rfrom'].'-'.$dutys['rto'];?></td>
    <td><?php echo $dutys['tfrom'].'-'.$dutys['tto'];?></td>
    <td><?php echo $dutys['date'].'-'.$dutys['month'].'-'.$dutys['year'];?></td>
    <td><?php echo $dutys['date_t'].'-'.$dutys['month_t'].'-'.$dutys['year_t'];?></td>
    <td>
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