<?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $notice = mysqli_query($con, "SELECT * FROM notice WHERE notice.date_n = '{$_POST['date_n']}' AND notice.month_n = '{$_POST['month_n']}' AND notice.year_n =  '{$_POST['year_n']}' ORDER BY sl DESC");
      
      mysqli_close($con);
    }
    ?>

<br />
<br />
<br />
<br />
<br />
<br />



<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Serial No#</th>
    <th style = "color: blue; background-color: orange; ">Notice Title</th>
    <th style = "color: blue; background-color: orange; ">Notice</th>
    <th style = "color: blue; background-color: orange; ">Date</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

  <tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($notice as $notices)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $notices['notice_title'];?></td>
    <td><?php echo $notices['notice_write'];?></td>
    <td><?php echo $notices['date_n'].'-'.$notices['month_n'].'-'.$notices['year_n'];?></td>
    <td>
    <a style="vertical-align: middle;" href="editnotice.php?sl=<?php echo $notices['sl']; ?>"><img src="resources\image\edit.ico" alt="Edit" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    <a style="vertical-align: middle;" href="deletenotice.php?sl=<?php echo $notices['sl']; ?>"><img src="resources\image\delete.png" alt="Delete" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    </td>

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