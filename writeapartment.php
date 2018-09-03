		<?php
		include_once "header.php";
		?>


<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="apartment_write" method="post" action="saveapartment.php">
<p>
	<strong>Apartment Name</strong><br />
	<input type="text" name= "apartment_name" placeholder="Enter your Apartment name" style="width:600px; padding:5px;" />
	</p>
	<p>
	<strong>Flat Description</strong>
	<input type="text"  name= "flat_size"  placeholder="Flat Size(sq/Ft)" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;  />

	<strong></strong>
	<input type="text" name= "bed" placeholder="Bed" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />

	<strong></strong>
	<input type="text" name= "kitchen" placeholder="Kitchen" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />

	<strong></strong>
	<input type="text" name= "balcony" placeholder="Balcony" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />

	<strong></strong>
	<select name="site" style="width:110px; padding:3px; border-radius: 8px;">
<option value="Front" selected>Front</option>
<option value="Middle">Middle</option>
<option value="Back">Back</option>
<option value="Left">Left</option>
<option value="Right">Right</option>
</select>

	<strong></strong>
	<input type="text" name= "washroom" placeholder="Washroom" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
	</p>
 </p>

	<p>
		<strong>Aparment Details</strong>
		<textarea name="apartment_details" cols="60" rows="60" placeholder="Enter apartment details" style="text-align: center;" ></textarea>
	</p>
<strong>Address</strong>
<strong></strong>
	<input type="text" name= "flat_no" placeholder="Flat" style="width:70px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "house_no" placeholder="House" style="width:70px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "road_no" placeholder="Road" style="width:70px; padding:5px;" />
<strong>Block</strong>
<select name="block_no" style="width:50px; padding:3px; border-radius: 8px;">
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

	
</p>

<strong>Apartment For</strong>
	<select name="apartment_for" style="width:80px; padding:3px; border-radius: 8px;">
<option value="sell" selected>Sell</option>
<option value="Rent">Rent</option>
</select>
</p>

<p>
	<strong>Price</strong>
	<input type="text" name= "price" placeholder="Price" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
	</p>

<p>
	<strong>From</strong>
	<input type="text" name= "date_a" placeholder="date" style="width:70px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "month_a" placeholder="Month" style="width:70px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "year_a" placeholder="Year" style="width:70px; padding:5px;" />
</p>
	
<p>
	<strong>Mobile No</strong>
	<input type="text" name= "contact_no" value="+8801" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
	</p>
 </p>
<p>
<strong>Email</strong>
	<input type="text" name= "email_id" placeholder="Enter your Email Id" style="width:300px; padding:5px;" />
	</p>
 <p>


	<p>

<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" /><br />
</select>
</p>


</form>
</body>
</p>

</p>
</p>
</div>
</div>
</body>
</html>

<?php
    include_once "under.php";
    ?>