		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $stuff_list = mysqli_query($con, "SELECT stuffas, COUNT(*), MAX(salary), MIN(salary), ROUND(AVG(salary),2) FROM stuff_list GROUP BY stuffas");
      mysqli_close($con);
    }
		?>

<br />
<br />
		<h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
    <th style = "color: blue; background-color: orange; ">Stuff As</th>
    <th style = "color: blue; background-color: orange; ">MAX Salary</th>
    <th style = "color: blue; background-color: orange; ">Average Salary</th>
    <th style = "color: blue; background-color: orange; ">Minimum Salary</th>
    <th style = "color: blue; background-color: orange; ">Total Stuff</th>
    
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($stuff_list as $stuff_lists)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $stuff_lists['stuffas'];?></td>

    <td><?php echo $stuff_lists['MAX(salary)'];?></td>
    <td><?php echo $stuff_lists['ROUND(AVG(salary),2)'];?></td>
    <td><?php echo $stuff_lists['MIN(salary)'];?></td>
    <td><?php echo $stuff_lists['COUNT(*)'];?></td>

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