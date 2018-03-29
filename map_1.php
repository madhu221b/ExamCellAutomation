<html>
<head>
<link rel = "stylesheet" type="text/css" href="c2.css">
</head>

<body class="map_B">
<?php
include 'connect.php';
session_start();
$sql = "SELECT * FROM SEAT_ARRG";
$result = mysqli_query($con,$sql);

$table_name = $_SESSION['table'];
$list_ = array();
$list_ = $_SESSION['list_'];
if(mysqli_num_rows($result)>0)
{
$i =0;
 while($row=mysqli_fetch_assoc($result))
 {
  echo "<button id ='".$row["BLOCK_NO"]."' onclick='showmap(".$row["COUNT"].",\"".$list_[$i]."\")' >".$row["BLOCK_NO"]."</button>";
 $i = $i + 1;
 }

}
mysqli_close($con);
?>

</body>
</html>
