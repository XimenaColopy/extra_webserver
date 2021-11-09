<?php
echo "This is an attempt to print out the contents of the database.";
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

$sql = "SELECT story_id, title FROM Stories WHERE date = 2021-04-30";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	$story_id = $row["story_id"]; 
	$story_title = $row["title"];
	echo "<br>Story #$story_id is $story_title.";
    //echo "id" . $row["story_id"]. " - title: " . $row["title"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

exit();
?>
