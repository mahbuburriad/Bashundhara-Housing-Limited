		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $email = mysqli_query($con, "SELECT * FROM email WHERE fromemail LIKE '%{$_POST['stuffas']}%' AND reciever LIKE '%{$_POST['stuffas2']}%'  ORDER BY date_e DESC");
      mysqli_close($con);
    }
		?>

		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Serial No#</th>
  <th style = "color: blue; background-color: orange; ">From</th>
  <th style = "color: blue; background-color: orange; ">To</th>
    <th style = "color: blue; background-color: orange; ">Subject</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; ">Date</th>
    <th style = "color: blue; background-color: orange; ">Delete</th>
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
    <td><?php echo $emailsss['reciever'];?></td>
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