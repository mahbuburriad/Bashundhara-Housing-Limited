		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $notice = mysqli_query($con, "SELECT date_n, month_n, year_n, COUNT(*) FROM notice GROUP BY date_n, month_n, year_n");
      mysqli_close($con);
    }
		?>

		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Serial No#</th>
    <th style = "color: blue; background-color: orange; ">Date</th>
    <th style = "color: blue; background-color: orange; ">Total Notice</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

  <tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($notice as $notices)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $notices['date_n'].'-'.$notices['month_n'].'-'.$notices['year_n'];?></td>
    <td><?php echo $notices['COUNT(*)'];?></td>

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