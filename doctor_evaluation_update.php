<?php

$var = $_POST['tex'];
//  echo "$var";

 $var2=$_POST['var1'];
// echo "$var2";

$servername="localhost";
$username="root";
$password="";
$database="patients";
$conn = mysqli_connect($servername,$username,$password,$database);
// $sql1 = "SELECT * FROM `list_1` WHERE ";
// // echo $sql;
// $result1 = mysqli_query($conn,$sql1);
$i = 0;
// while($row1=mysqli_fetch_assoc($result1))
// {
// //  echo "$row1['Doctors_evaluation']";
//  echo '<span class="excerpt d-block">'.$row1['Doctors_evaluation'].'</span>'; 
// }
echo "<link rel='stylesheet' href='Loading.css'>";
$sql = "UPDATE list_1 SET Doctors_evaluation='$var' WHERE Username='$var2'";
if ($conn->query($sql) === TRUE) {
    echo "<h2>Record updated successfully</h2>
    <br><form action='doctors_sample.php'  method='post' enctype='multipart/form-data'><button type='submit' class ='b1'><span>Back</span></button>";
  } else {
    echo "<h2 style='color:red'>Error updating record: </h2>" . $conn->error;
  }





?>