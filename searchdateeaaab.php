<?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $email = mysqli_query($con, "SELECT * FROM email WHERE email.date_e = '{$_POST['date_e']}' AND email.month_e = '{$_POST['month_e']}' AND email.year_e =  '{$_POST['year_e']}'AND reciever LIKE '%guard%' ORDER BY date_e DESC ");
      
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
  <th style = "color: blue; background-color: orange; ">From</th>
    <th style = "color: blue; background-color: orange; ">Subject</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; ">Date</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

  <tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($email as $emailsss)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $emailsss['fromemail'];?></td>
    <td><?php echo $emailsss['subject'];?></td>
    <td><?php echo $emailsss['ebody'];?></td>
    <td><?php echo $emailsss['date_e'].'-'.$emailsss['month_e'].'-'.$emailsss['year_e'];?></td>

    <td>
    <a style="vertical-align: middle;" href="deleteemail.php?eid=<?php echo $emailsss['eid']; ?>"><img src="resources\image\delete.png" alt="Delete" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
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