		<?php
		include_once "header.php";

		?>

		<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="guest_list" method="post" action="saveguest.php">
<p>
	<strong>First Name</strong>
	<input type="text" name= "first_name" value="<?php echo $guest_lists['first_name'];?>" placeholder="Enter your First name" />
	</p>
	<p>
	<strong>Last Name</strong>
	<input type="text" name= "last_name" value="<?php echo $guest_lists['last_name'];?>" placeholder="Enter your Last name"/>
	</p>
	<p>
	<strong>User ID</strong>
	<input type="text" name= "user_id" value="<?php echo $guest_lists['user_id'];?>" placeholder="Enter your User ID"/>
	</p>
	<p>
	<strong>Email</strong>
	<input type="text" name= "email" value="<?php echo $guest_lists['email'];?>" placeholder="Enter your @Email"/>
	</p>
	<p>
	<strong>Password</strong>
	 <input type="Password" name="password" value="<?php echo $guest_lists['password'];?>" placeholder="Enter your Password"/><br />
	 </p>
	<p>
	
	<strong>Gender</strong>
	<select name="gender" value="<?php echo $guest_lists['gender'];?>" style="width:80px; padding:3px; border-radius: 8px;">
<option value="Male" selected>Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>
</p>
	<p>
<strong>Birthday:</strong>
<strong>Month</strong>
<select name="month" value="<?php echo $guest_lists['month'];?>" style="width:100px; padding:3px; border-radius: 8px;">
<option value="January" selected>January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>

<strong>-Date</strong>
<select name="date" value="<?php echo $guest_lists['date'];?>" style="width:50px; padding:3px; border-radius: 8px;">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="30">31</option>
</select>

<strong>-Year</strong>
<select name="year" value="<?php echo $guest_lists['year'];?>" style="width:80px; padding:3px; border-radius: 8px;">
<option value="1900">1900</option>
<option value="1901">1901</option>
<option value="1902">1902</option>
<option value="1903">1903</option>
<option value="1904">1904</option>
<option value="1905">1905</option>
<option value="1906">1906</option>
<option value="1907">1907</option>
<option value="1908">1908</option>
<option value="1909">1909</option>
<option value="1910">1910</option>
<option value="1911">1911</option>
<option value="1912">1912</option>
<option value="1913">1913</option>
<option value="1914">1914</option>
<option value="1915">1915</option>
<option value="1916">1916</option>
<option value="1917">1917</option>
<option value="1918">1918</option>
<option value="1919">1919</option>
<option value="1920">1920</option>
<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>

</select>

<p>
	<strong>Mobile No</strong>
	<input type="text" name= "mobileno" value="+8801" value="<?php echo $guest_lists['mobileno'];?>" maxlength="14" style="width:120px; padding:5px; border-radius: 8px;" />
	</p>
 </p>

 <p>
	<strong>Permanent Address:-</strong>
	<strong></strong>
	<input type="text" name= "Flat" value="<?php echo $guest_lists['Flat'];?>" placeholder="Flat" style="width:70px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "House" value="<?php echo $guest_lists['House'];?>" placeholder="House" style="width:70px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "Road" value="<?php echo $guest_lists['Road'];?>" placeholder="Road" style="width:70px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "Thana" value="<?php echo $guest_lists['Thana'];?>" placeholder="Thana" style="width:90px; padding:5px;"  />

	<strong></strong>
	<input type="text" name= "District" value="<?php echo $guest_lists['District'];?>" placeholder="District" style="width:90px; padding:5px;" />

	<strong></strong>
	<input type="text" name= "Country" value="<?php echo $guest_lists['Country'];?>" placeholder="Country" style="width:100px; padding:5px;" />
	</p>

	<p>

<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" /><br />
</select>
</p>


</form>
</body>
</p>

		<footer style="top: 0 auto">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources\image\facebook.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources\image\twitter.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources\image\youtube.png" height="50px"></a>
			
			<center>© 2017 Bashundhara Housing Limited</center>
		</footer>
	</body>
</html>
		<?php

		include_once "connection.php";

   

      if (isset($_POST['submit']))

{

if (is_numeric($_POST['id']))

{

$id = $_POST['id'];

$first_name = mysql_real_escape_string(htmlspecialchars($_POST['first_name']));

$last_name = mysql_real_escape_string(htmlspecialchars($_POST['last_name']));
$user_id = mysql_real_escape_string(htmlspecialchars($_POST['user_id']));
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
$password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
$gender = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
$month = mysql_real_escape_string(htmlspecialchars($_POST['month']));
$date = mysql_real_escape_string(htmlspecialchars($_POST['date']));
$year = mysql_real_escape_string(htmlspecialchars($_POST['year']));
$Flat = mysql_real_escape_string(htmlspecialchars($_POST['mobileno']));
$Road = mysql_real_escape_string(htmlspecialchars($_POST['mobileno']));
$House = mysql_real_escape_string(htmlspecialchars($_POST['House']));
$Thana = mysql_real_escape_string(htmlspecialchars($_POST['Thana']));
$District = mysql_real_escape_string(htmlspecialchars($_POST['District']));
$Country = mysql_real_escape_string(htmlspecialchars($_POST['Country']));

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM guest_list WHERE id='{$_GET['id']}'")

or die(mysql_error());

$guest_lists = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($guest_lists)

{



// get data from db
$id = $guest_lists['id'];

$first_name = $guest_lists['first_name'];

$last_name = $guest_lists['last_name'];
$user_id= $guest_lists['user_id'];
$email = $guest_lists['email'];
$password= $guest_lists['password'];
$gender = $guest_lists['gender'];
$mobileno =$guest_lists['mobileno'];
$date =$guest_lists['date'];
$month = $guest_lists['month'];
$year =$guest_lists['year'];
$Flat =$guest_lists['Flat'];
$House =$guest_lists['House'];
$Road =$guest_lists['Road'];
$Thana =$guest_lists['Thana'];
$District =$guest_lists['District'];
$Country =$guest_lists['Country'];



// show form

renderForm($id, $first_name, $last_name, $user_id, $email, $password, $gender, $mobileno, $date, $month, $year, $Flat, $House, $Road,$Thana,$District,$Country, $error);

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}
      mysqli_close($con);

		?>