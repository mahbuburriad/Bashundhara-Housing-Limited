		<?php
include_once "header.php";
    include_once "connection.php";
    mysql_select_db("search_test") or die("could not find db")
    ?>
    <?php
    
    if(isset($_POST['search']))
    {
$searchq = $_POST['search'];
$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

$query = mysql_query("SELECT * FROM stuff_list WHERE stuff_list.first_name LIKE '%$searchq%' or stuff_list.last_name LIKE '%$searchq%'") or die("could not search!");
$count = mysql_num_rows($query);
if(count == 0)
{
	$output = 'There was no search result';
}
else
{
	while($rows = mysql_fetch_array($query))
	{
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$id = $row['id'];

		$output .='<div>'.$first_name.' '.$last_name.'</div>';
	}
}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
    <form action = "index.php" method = "post">
    <input type = "text" name = "search" placeholder="search any"/> 
    <input type="submit" name="submit" value="Search" style="width:70px; padding:3px; border-radius: 40px;" />
    </form>

    <?php print ("$output");?>

</body>

</html>



<?php
    include_once "under.php";
    ?>