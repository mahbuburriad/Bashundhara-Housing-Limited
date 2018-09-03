    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $stuff_regi = mysqli_query($con, "SELECT * FROM stuff_regi WHERE session LIKE '%{$_POST['session']}%' AND year = '{$_POST['year']}' AND stuffas2 LIKE '%{$_POST['stuffas2']}%' AND graduate > '{$_POST['graduate']}'");
      mysqli_close($con);
    }
    ?>

    <h2>The padding Property</h2>
<p>This property adds space between the border and the content in a table.</p>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
    <th style = "color: blue; background-color: orange; ">Name</th>
    <th style = "color: blue; background-color: orange; ">User ID</th>
    <th style = "color: blue; background-color: orange; ">Email</th>
    <th style = "color: blue; background-color: orange; ">Gender</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Birthday</th>
    <th style = "color: blue; background-color: orange; ">Stuff As</th>
    <th style = "color: blue; background-color: orange; ">Session</th>
    <th style = "color: blue; background-color: orange; ">SSC</th>
    <th style = "color: blue; background-color: orange; ">HSC</th>
    <th style = "color: blue; background-color: orange; ">Graduate</th>
    <th style = "color: blue; background-color: orange; ">Address</th>
    <th style = "color: blue; background-color: orange; ">Add</th>
    <th style = "color: blue; background-color: orange; ">Delete</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($stuff_regi as $stuff_regis)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $stuff_regis['first_name2'].' '.$stuff_regis['last_name2'];?></td>
    <td><?php echo $stuff_regis['user_id2'];?></td>
    <td><?php echo $stuff_regis['email2'];?></td>
    <td><?php echo $stuff_regis['gender2'];?></td>
    <td><?php echo $stuff_regis['mobileno2'];?></td>
    <td><?php echo $stuff_regis['date2'].'-'.$stuff_regis['month2'].'-'.$stuff_regis['year2'];?></td>
    <td><?php echo $stuff_regis['stuffas2'];?></td>
    <td><?php echo $stuff_regis['session'].'-'.$stuff_regis['year'];?></td>
    <td><?php echo $stuff_regis['ssc'].'-'.$stuff_regis['school'];?></td>

    <td><?php echo $stuff_regis['hsc'].'-'.$stuff_regis['college'];?></td>
    <td><?php echo $stuff_regis['graduate'].'-'.$stuff_regis['university'];?></td>
    <td><?php echo ' #F-'.$stuff_regis['Flat2'].', #house-'.$stuff_regis['House2'].', #R-'.$stuff_regis['Road2'].', #Th-'.$stuff_regis['Thana2'].', #D-'.$stuff_regis['District2'].', #C-'.$stuff_regis['Country2'];?></td>

    <td>
    <a style="vertical-align: middle;" href="cregi.php?id=<?php echo $stuff_regis['id']; ?>"><img src="resources\image\t.png" alt="Edit" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
    </td>
    <td>
    <a style="vertical-align: middle;" href="deletestuffregi.php?id=<?php echo $stuff_regis['id']; ?>"><img src="resources\image\delete.png" alt="Delete" style="height: 20px; width: 20px;" /></a> &nbsp;&nbsp;
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