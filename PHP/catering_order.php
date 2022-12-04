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

$odate = $_POST['odate'];
$gdate = $_POST['gdate'];
$method = $_POST['method'];
$location = $_POST['location'];
$name = $_POST['name'];
$time = $_POST['time'];
$type = $_POST['type'];
$putime = $_POST['putime'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$num = $_POST['num'];
$meatball6 = $_POST['meatball6'];
$meatball12 = $_POST['meatball12'];
$club6 = $_POST['club6'];
$club12 = $_POST['club12'];
$turkey6 = $_POST['turkey6'];
$turkey12 = $_POST['turkey12'];
$blt6 = $_POST['blt6'];
$blt12 = $_POST['blt12'];
$box = $_POST['box'];
$diet = $_POST['diet'];

$sql = "INSERT INTO cater (odate, gdate, method, location, name, time, type, putime, phone, email, num, meatball6, meatball12, club6, club12, turkey6, turkey12, blt6, blt12, box, diet) VALUES ('$odate', '$gdate', '$method', '$location', '$name', '$time', '$type', '$putime', '$phone', '$email', '$num', '$meatball6', '$meatball12', '$club6', '$club12', '$turkey6', '$turkey12', '$blt6', '$blt12', '$box', '$diet')";

@mysqli_query($dbc, $sql);


mysqli_close($dbc);

?>