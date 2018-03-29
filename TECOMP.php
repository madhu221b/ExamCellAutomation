<html>

<head>
<link rel = "stylesheet" type="text/css" href="c2.css">
</head>

<body class="addmarks">
<?php
include 'connect.php';

$sql = "SHOW COLUMNS FROM TECOMP";
$result = mysqli_query($con,$sql);

echo "<form method=\"POST\" action=\"TECOMP_cal.php\"><table><tr>";
while($row=mysqli_fetch_array($result))
 {
  if($row['Field']=='TOTAL') 
  {
   break;
  }
  echo "<th>".$row['Field']."</th>";
 
 }

echo "</tr>";

$sql1 = "SELECT * FROM TECOMP ";
$result1 = mysqli_query($con,$sql1);

$SMD = 0;
$ESIOT = 0;
$DAA = 0;
$SPOS = 0;
$WT= 0;

while($row1=mysqli_fetch_assoc($result1))
 {
  echo "<tr>";
  echo "<td>".$row1["SEAT_NO"]."</td>";
  echo "<td><input type = number value=0 name =\"SMD".$SMD."\"></td>";
  $SMD = $SMD +1;
  echo "<td><input type = number  value=0 name =\"ES&IOT".$ESIOT."\" ></td>";
  $ESIOT = $ESIOT +1;
  echo "<td><input type = number  value=0 name =\"WT".$WT."\" ></td>";
  $WT = $WT +1;
  echo "<td><input type = number  value=0 name =\"DAA".$DAA."\" ></td>";
  $DAA = $DAA +1;
  echo "<td><input type = number  value=0 name =\"SPOS".$SPOS."\" ></td>";
  $SPOS = $SPOS +1;
  echo  "</tr>";
 }

echo "</table>";
echo "<input type = \"submit\" value=\"SUBMIT\" ></form>";
//echo "<a href = \"tab_class.html\"><button>OK</button></a>";
mysqli_close($con);
?>
</body>
</html>
