<?php

$username = "root";
$password="";
$server ="localhost";

$con = mysqli_connect($server,$username,$password);

mysqli_select_db($con, 'ebanking');

$name = isset($_GET['name']) ? $_GET['name'] : "Name";
$email = isset($_GET['email']) ? $_GET['email'] : "Email";
$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : "0";
$comment = isset($_GET['comment']) ? $_GET['comment'] : "Comment";

$query = "insert into `contactform` (`Name`, `Email`, `Mobile`, `Comment`) values ('$name', '$email', '$mobile', '$comment')";
mysqli_query($con, $query);

header('location: index.php');
/*if($query)
{
echo $query;
}
else
{
    echo "No connection";
    die("no connection".mysqli_connect_error());//exit
}*/
?>