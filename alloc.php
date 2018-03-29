<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type="text/css" href="c2.css">
</head>

<body>
<?php
include 'connect.php';
$sql = "SELECT * FROM SEAT_ARRG";
$result = mysqli_query($con,$sql);
echo "<div class=\"alloc_sum\"><table id=\"tab_alloc\">
      <tr>
      <th>Block</th>
      <th>Roll-Nos</th>
      <th>Supervisor</th>
      </tr>";

if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_assoc($result))
 {
   echo "<tr>";
   echo "<td>".$row["BLOCK_NO"]."</td>";
   echo "<td>".$row["START_ROLL"]."-".$row["END_ROLL"]."</td>";
   echo "<td>".$row["STAFF"]."</td>";
   echo "</tr>";  
 }


echo "</table></div>";
mysqli_close($con);

} 


?>
</body>
</html>
