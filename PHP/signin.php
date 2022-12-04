<?php


DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mackenthuns');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
echo "Connection Successful";

$emailaddress = $_POST['emailaddress'];
$password = $_POST['password'];

$sql = "INSERT INTO signin (emailaddress, password)
VALUES ('$emailaddress', '$password')";

@mysqli_query($dbc, $sql);


mysqli_close($dbc);

?>