<?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $notice = mysqli_query($con, "SELECT * FROM notice WHERE notice.notice_title  = '{$_POST['notice_title']}' ORDER BY date_n DESC");
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