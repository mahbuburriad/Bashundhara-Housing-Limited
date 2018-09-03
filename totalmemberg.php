    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $guest_list = mysqli_query($con, "SELECT gender, COUNT(*) FROM guest_list GROUP BY gender");
      mysqli_close($con);
    }
    else 
    ?>

    <h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>

    <th style = "color: blue; background-color: orange; ">Gender</th>
    <th style = "color: blue; background-color: orange; ">Total Member</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($guest_list as $guest_lists)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $guest_lists['gender'];?></td>
    <td><?php echo $guest_lists['COUNT(*)'];?></td>
    

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