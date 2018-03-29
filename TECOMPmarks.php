<html>
<head>
<link rel = "stylesheet" type="text/css" href="c2.css">
</head>

<body>


<?php
include 'connect.php';
$sql = "SHOW COLUMNS FROM TECOMP";
$result = mysqli_query($con,$sql);
echo "<div class=\"addmarks\">";
echo "<table><tr>";
while($row=mysqli_fetch_array($result))
 {
  
  echo "<th>".$row['Field']."</th>";
 
 }

echo "</tr>";
$sql1 = "SELECT * FROM TECOMP ";
$result1 = mysqli_query($con,$sql1);

while($row1=mysqli_fetch_array($result1))
 {
   echo "<tr>";
   echo "<td>".$row1[0]."</td>";
   echo "<td>".$row1[1]."</td>";
   echo "<td>".$row1[2]."</td>";
   echo "<td>".$row1[3]."</td>";
   echo "<td>".$row1[4]."</td>";
   echo "<td>".$row1[5]."</td>";
   echo "<td>".$row1[6]."</td>";
   echo "<td>".$row1[7]."</td>";
   echo "</tr>";
 }

echo "</table>";
echo "</div>";
mysqli_close($con);
?>

</body>
</html>
