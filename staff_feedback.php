<?php
$servername="localhost";
$username="root";
$password="";
$database="patients";
$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM `list_1`";
// echo $sql;
$result = mysqli_query($conn,$sql);
$sum=0;
$count=0;
while($row=mysqli_fetch_assoc($result))
{
    $rating = $row['rating'];
  $sum=$sum+$rating;
  $count=$count+1;
}
$avg = $sum/$count;
echo "<link rel='stylesheet' href='Loading.css'>";
echo "<b style='color:yellow'>The collected feedback (average) about the staff of this hospital is :</b>";
echo "<h2>$avg out of 10</h2>";
echo "<form action='graph.php' method='post'><button type='submit' class='b1'><span>View Ratings</span></button></form>";

?>