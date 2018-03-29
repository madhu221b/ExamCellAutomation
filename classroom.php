<?php
include 'connect.php';
$classes = $_POST["classes"];

$class_array = explode(",",$classes);
$len = count($class_array);

$sql1 = "DELETE FROM wing"; 
$result1 = mysqli_query($con,$sql1);


for($i=0;$i<$len-1;$i++)
{
  $sql = "INSERT INTO wing values('".$class_array[$i][0]."','".$class_array[$i]."')"; 
  $result = mysqli_query($con,$sql);
  
}

mysqli_close($con);
?>
