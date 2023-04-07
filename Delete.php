<?php
 $delete=$_POST['DELETE_x'];

$servername="localhost";
$username="root";
$password="";
$database="patients";
$conn = mysqli_connect($servername,$username,$password,$database);
$query = "DELETE FROM `list_1` WHERE Username ='$delete' ";
echo"<link rel='stylesheet' href = 'Loading.css'>";
if ($conn->query($query)==TRUE && $conn->affected_rows > 0) {
    echo "<h2>".$delete." : Record Deleted</h2>";
} else {
    echo "<h2>No Such Record Found</h2>";
}

echo"<form action='Doc_list_of_patients.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1'><span>Back</span></button></form>";


?>