<?php

session_start();
include 'connect.php';
$date = $_POST["date"];
$branch = $_POST["branch"];
$wing = $_POST["wing"];
$list_ = array();

$capacity = 4;
$flag=0;

$sql = "SELECT SUBJECT FROM date_subject where  BRANCH like '$branch' AND DATE like '$date' ";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
$row = mysqli_fetch_assoc($result);
$table_name = $row['SUBJECT'];
$_SESSION['table'] = $table_name;

/*FETCHING BLOCKS*/
$sql1 = "SELECT BLOCK FROM wing where WING LIKE '$wing'";
$result1 = mysqli_query($con,$sql1);

/*FETCHING FROM STAFF TABLE*/
$sql6 = "SELECT NAME FROM staff where WING LIKE '$wing'";
$result6 = mysqli_query($con,$sql6);


while($row1 = mysqli_fetch_assoc($result1))
{
  $count =0;
  $flag=0;
  $str = "";
/*GET START SEAT NO */
{

 $sql3 = "SELECT SEAT_NO FROM ".$table_name." WHERE BLOCK='' limit 1";
 $result3 = mysqli_query($con,$sql3);
 $row3 = mysqli_fetch_assoc($result3);
 $start_roll = $row3["SEAT_NO"];
}

   for($i=0;$i<$capacity;$i++)
    {
     $sql4 = "SELECT SEAT_NO FROM ".$table_name." WHERE BLOCK='' limit 1";
     $result4 = mysqli_query($con,$sql4);
     if(mysqli_num_rows($result4)==0) {break; $flag=1;}
     $count++;
     $row4 = mysqli_fetch_assoc($result4);
     $str = $str.$row4["SEAT_NO"];
     $str = $str.",";
     $sql2 = "UPDATE ".$table_name." SET BLOCK='".$row1['BLOCK']."' WHERE BLOCK='' limit 1";
     $result2 = mysqli_query($con,$sql2);


    }  

if($flag==1)
{
 break;
}
 array_push($list_,$str);


 $end_roll = $row4["SEAT_NO"];

 $row6 = mysqli_fetch_assoc($result6);
 $trname = $row6["NAME"];
  
 if($count!=0)
 {
 $sql4 = "INSERT INTO SEAT_ARRG VALUES('".$row1['BLOCK']."','".$start_roll."','".$end_roll."','".$trname."',".$count.")";
 $result4 = mysqli_query($con,$sql4);
 }
 


}

$_SESSION['list_'] = $list_;
}
else
{
echo "0 results";
}

mysqli_close($con);
?>
