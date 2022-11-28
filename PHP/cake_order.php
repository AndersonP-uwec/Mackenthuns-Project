<?php 

// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mackenthuns');
// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
echo "Connection Successful";

$name = $_POST['name'];
$flavor = $_POST['flavor'];
$layers = $_POST['layers'];

$sql = "INSERT INTO orders (order)
VALUES ('$order', '$flavor', '$layers')";

@mysqli_query($dbc, $sql);


mysqli_close($dbc);





?>