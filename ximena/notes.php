<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
//comment
#coment
/*
variables are case sensitive, keywords, functions, etc are not
*/

echo '<p>Hello World</p>'; ?> 
 </body>
</html>

<?php
// Defining constant
define("SITE_URL", "https://www.tutorialrepublic.com/");

// Using constant
echo 'Thank you for visiting - ' . SITE_URL;

// Displaying HTML code
echo "<h4>This is a simple heading.</h4>";
echo "<h4 style='color: red;'>This is heading with style.</h4>";

// Defining variables
$txt = "Hello World!";
$colors = array("Red", "Green", "Blue");

// Displaying variables
echo $txt;
echo $colors[0];

// Assign the value TRUE to a variable
$show_error = true;
var_dump($show_error);

// Arrays
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>";
 
$color_codes = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);
var_dump($color_codes);

// Open a file for reading
$handle = fopen("note.txt", "r");
var_dump($handle);
echo "<br>";


// Connect to MySQL database server with default setting
$link = mysqli_connect("localhost", "root", "");
var_dump($link);


//Put variable in string
echo "The text was replaced $count times.";

?>
