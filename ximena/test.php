
<?php 
///I want to make the database searchable
$servername = "localhost";
$username = "ximena";
$password = "Horse4horse";
$dbname = "ximenabot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  echo "Connection failed: \n";
  die("Connection failed: " . $conn->connect_error);
}

if( $_POST['title'] or $_POST['sdate'] or $_POST['edate']){
	$rst = $conn->query("SELECT MIN(date) AS minimum FROM Stories");	
	$row = mysql_fetch_assoc($rst); 
	$minimum = $row['minimum'];
	echo "the earliest date is $minimum";

    if ($_POST["title"] != ""){
        $title = $_POST['title'];
        $title = "%$title%";
    }

	if ($_POST['sdate'] or $_POST['edate'] != ""){
		//$s_date = 
	}
	$sql = "SELECT * FROM Stories WHERE title LIKE '$title' OR date LIKE '$date' ORDER BY date ASC";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$story_id = $row["story_id"];
			$story_title = $row["title"];
			$story_date = $row["date"];
			$story_url = $row["story_url"];

			//echo "ID: $story_id <br />";
			echo "Date Published: $story_date <br />";
			echo "Title: $story_title <br />";
			echo "Url: $story_url <br /> <br />";
			//echo "<a href=$story_url></a>";
		}

	}
	else {
	  echo "There are no results <br />";
	  //echo "date string $date <br />"
	}
	$conn->close();
	exit();

}
?>


<!-- Html of the page -->
<html>
<body>

<h1>Find past GrepBeat stories.</h1>
<p>Fill in any combination of the boxes, more input will only expand the results </p>

<form action="<?php $_PHP_SELF ?>" method="POST">
	<label for="title">Title:</label><br>
	<input type="text" id="fname" name="title" placeholder="any part of the title"/><br><br>
	<label for="sdate">Start Date</label><br>
	<input type="date" id="sdate" name="sdate" min="2021-03-23"/><br><br> 
	<!-- The minumum is the date of the first story in the database. I just typed it in but maybe there is a way to scan the database and have that as a variable -->
	<label for="edate">End Start</label><br>
	<input type="date" id="edate" name="edate"/><br><br> 
	<input type="submit" name="submit" />
</form>

</body>
</html>

