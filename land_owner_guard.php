		<?php
		include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $land_owner_guard = mysqli_query($con, "SELECT * FROM land_owner_list ORDER BY id ASC ");
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
  <p>
  <form name="mobileno" method="post"  action="searchmobileland.php">
  <strong>Mobile No</strong>
  <input type="text" name= "mobileno" value="+8801" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
  </form>
  </p>

  <p>
    <form name="land" method="post" action="searchland.php">
      <strong>Land:</strong>
<strong></strong>
  <input type="text" name= "Flat_L" placeholder="Flat" style="width:70px; padding:5px;" />

  <strong></strong>
  <input type="text" name= "House_L" placeholder="House" style="width:70px; padding:5px;" />

  <strong></strong>
  <input type="text" name= "Road_L" placeholder="Road" style="width:70px; padding:5px;" />
<strong></strong>
<select name="block" style="width:50px; padding:3px; border-radius: 8px;">
<option value="A" selected>A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
<option value="I">I</option>
<option value="J">J</option>
<option value="K">K</option>
<option value="L">L</option>
<option value="M">M</option>
<option value="N">N</option>
<option value="O">O</option>
<option value="P">P</option>
<option value="Q">Q</option>
<option value="R">R</option>
<option value="S">S</option>
<option value="T">T</option>
<option value="U">U</option>
<option value="V">V</option>
<option value="W">W</option>
<option value="X">X</option>
<option value="Y">Y</option>
<option value="Z">Z</option>

</select>
<input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
    </form>
  </p>
  
  <p>
    <form name="name" method="post"  action="searchnameland.php">
      <strong>Name</strong>
  <input type="text" name= "first_name" placeholder="Enter name" />
  <input type="submit" name="submit" value="Go" style="width:40px; padding:3px; border-radius: 40px;" />
    </form>
  </p>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl #</th>
  <th style = "color: blue; background-color: orange; ">ID</th>
    <th style = "color: blue; background-color: orange; ">Name</th>
    <th style = "color: blue; background-color: orange; ">Mobile Number</th>
    <th style = "color: blue; background-color: orange; ">Address</th>

    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($land_owner_guard as $land_owner_guards)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $land_owner_guards['id'];?></td>
    <td><?php echo $land_owner_guards['first_name'].' '.$land_owner_guards['last_name'];?></td>
    <td><?php echo $land_owner_guards['mobileno'];?></td>
    <td><?php echo ' #F-'.$land_owner_guards['Flat_L'].', #H-'.$land_owner_guards['House_L'].', #R-'.$land_owner_guards['Road_L'].', #B-'.$land_owner_guards['block'];?></td>
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