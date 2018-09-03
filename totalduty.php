    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $duty = mysqli_query($con, "SELECT fors, block, date, month, year, COUNT(*) FROM duty GROUP BY fors,block, date, month, year ORDER BY date ASC");
      mysqli_close($con);
    }
    ?>

    <h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>


<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Serial No#</th>
    <th style = "color: blue; background-color: orange; ">For</th>
    <th style = "color: blue; background-color: orange; ">Block</th>
    <th style = "color: blue; background-color: orange; ">Date</th>
    <th style = "color: blue; background-color: orange; ">Total</th>
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
    <td><?php echo $dutys['date'].'-'.$dutys['month'].'-'.$dutys['year'];?></td>
    <td><?php echo $dutys['COUNT(*)'];?></td>


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