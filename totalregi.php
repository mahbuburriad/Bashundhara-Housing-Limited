    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $stuff_regi = mysqli_query($con, "SELECT session, year, gender2, stuffas2, COUNT(*) FROM stuff_regi GROUP BY  session, year, gender2, stuffas2");
      mysqli_close($con);
    }
    ?>

    <h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
    <th style = "color: blue; background-color: orange; ">Session</th>
    <th style = "color: blue; background-color: orange; ">Gender</th>
    <th style = "color: blue; background-color: orange; ">Stuff As</th>
    <th style = "color: blue; background-color: orange; ">Total Registration</th>

    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($stuff_regi as $stuff_regis)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>

    
    <td><?php echo $stuff_regis['session'].'-'.$stuff_regis['year'];?></td>
    <td><?php echo $stuff_regis['gender2'];?></td>
    <td><?php echo $stuff_regis['stuffas2'];?></td>
    <td><?php echo $stuff_regis['COUNT(*)'];?></td>

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