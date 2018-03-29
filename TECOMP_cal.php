<html>

<head>
<link rel = "stylesheet" type="text/css" href="c2.css">
</head>

<body class="map_B">

<?php
include 'connect.php';

$i=0;
$sql = "SELECT * FROM TECOMP";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result))
{
$sub1 =$_POST["SMD$i"];
$sub2 = $_POST["ES&IOT$i"]; 
$sub3 =$_POST["WT$i"];
$sub4 =$_POST["DAA$i"];
$sub5 =$_POST["SPOS$i"];
$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$per = ($total/150)*100;
$sql2 = "UPDATE TECOMP SET SMD = ".$sub1.",ESIOT = ".$sub2." ,WT = ".$sub3." ,DAA = ".$sub4." ,SPOS = ".$sub5." ,TOTAL = ".$total." ,PERCENT = ".$per." WHERE SEAT_NO LIKE '".$row['SEAT_NO']."'";
$result2 = mysqli_query($con,$sql2);

$i = $i+1;

}

mysqli_close($con);
?>

</body>
</html>
