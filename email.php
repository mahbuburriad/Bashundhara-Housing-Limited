		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $email = mysqli_query($con, "SELECT * FROM email ORDER BY date_e DESC");
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
<form name="email" method="post" action="searchdateeaa.php">
<strong>Date</strong>
  <input type="text" name= "date_e" placeholder="Date" style="width:90px; padding:5px;"  />

  <strong></strong>
  <input type="text" name= "month_e" placeholder="Month" style="width:90px; padding:5px;" />

  <strong></strong>
  <input type="text" name= "year_e" placeholder="Year" style="width:100px; padding:5px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
</form>
  <form name="emailsu" method="post" action="searchessa.php">
  <strong>Email Subject</strong>
  <input type="text" name= "subject" placeholder="Enter Email Subject" style="width:200px; padding:5px; border-radius: 8px;" />

<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />  </form><p><p>
<form name="searchstuff" method="post" style="float: left;" action="emailss.php">

<strong>From</strong>
  <select name="stuffas" style="width:150px; padding:2px; border-radius: 8px;">
<option value="manager" selected>Manager</option>
<option value="land_manager">Land Manager</option>
<option value="land_owner">Land Owner</option>
<option value="guest">Guest</option>
<option value="security">Security Officer</option>
<option value="guard">Guard</option>
<option value="cleaner">Cleaner</option>
</select>
<strong>To</strong>
  <select name="stuffas2" style="width:150px; padding:2px; border-radius: 8px;">
<option value="manager" selected>Manager</option>
<option value="land_manager">Land Manager</option>
<option value="land_owner">Land Owner</option>
<option value="guest">Guest</option>
<option value="security">Security Officer</option>
<option value="guard">Guard</option>
<option value="cleaner">Cleaner</option>
</select>

<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
</p>
<p>

    <a style="width: 100px; padding: 3px; font-size: 1.2em; border-radius: 30px; cursor: pointer; background-color: silver;" href="totalmailsgsa.php">Total Mail By Date</a>
  </p>
</form>
<P>
<br />
<P>
<br />
<P>
<br />
<P>
<br />

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

