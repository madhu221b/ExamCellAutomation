<?php
include 'connect.php';

$user = $_POST["user"];
$pass = $_POST["pass"];


$sql = "SELECT * FROM ADMIN_DB where pass LIKE '".$pass."' and user LIKE '".$user."'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
header("Location:page2.html");
}
else
{
echo "<script> alert('Invalid credentials'); window.location.href = 'page1.html';</script>";


}

mysqli_close($con);
?>
