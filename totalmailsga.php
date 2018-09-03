    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $email = mysqli_query($con, "SELECT date_e, month_e, year_e, COUNT(*) FROM email WHERE reciever LIKE '%security%' GROUP BY date_e, month_e, year_e");
      mysqli_close($con);
    }
    ?>

    <h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>




<br />
<br />
<br />
<br />
<br />
<br />




<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Serial No#</th>
    <th style = "color: blue; background-color: orange; ">Date</th>
    <th style = "color: blue; background-color: orange; ">Total Mail</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

  <tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($email as $emailsss)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $emailsss['date_e'].'-'.$emailsss['month_e'].'-'.$emailsss['year_e'];?></td>
    <td><?php echo $emailsss['COUNT(*)'];?></td>


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