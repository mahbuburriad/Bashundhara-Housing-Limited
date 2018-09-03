		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $notice = mysqli_query($con, "SELECT * FROM notice ORDER BY sl DESC");
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
<form name="date" method="post" style="float: left;" action="searchdate.php">
<strong>Date</strong>
  <input type="text" name= "date_n" placeholder="Date" style="width:90px; padding:5px;"  />

  <strong></strong>
  <input type="text" name= "month_n" placeholder="Month" style="width:90px; padding:5px;" />

  <strong></strong>
  <input type="text" name= "year_n" placeholder="Year" style="width:100px; padding:5px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </p>
  </form>

  <form name="notice" method="post" action="searchtitle.php">
  <p>
  <strong>Notice Title</strong>
  <input type="text" name= "notice_title"  placeholder="Enter Notice Title" style="width:200px; padding:5px; border-radius: 8px;" />

<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />

    <a style="width: 100px; padding: 3px; font-size: 1.2em; border-radius: 30px; cursor: pointer; background-color: silver;" href="totalmail.php">Total Notice By Date</a>
  </p>
</form>
    

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