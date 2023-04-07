
<!DOCTYPE html>
<html lang="en">
<head>
    <h2>List Of Patients</h2><br>
  <!--<title style="color:aqua">List of Patients </title>-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


@import url("https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap");
h2 {
  display: block;
  color: white;
  font-weight: 100;
  font-size: 30;
  text-align: center;
}
      body{margin-top:20px;
        display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  margin: 0;
  font-family: "Lato";
  font-weight: 300;
  font-size: 24px;
  background: #2b2b2b;}
.block-7 {
    border-radius: 4px;
    margin-bottom: 30px;
    padding: 0;
    overflow: hidden;
    background: #fff;
    -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
@media (max-width: 991.98px) {
    .block-7 {
        margin-top: 30px;
    }
}
.block-7 .img {
    height: 250px;
}
.block-7 .heading-2 {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
}
.block-7 .price {
    margin: 0;
    padding: 0;
    display: block;
}
.block-7 .price sup {
    font-size: 24px;
    top: -1em;
    color: #b3b3b3;
}
.block-7 .price .number {
    font-size: 60px;
    font-weight: 600;
    color: #000000;
}
.block-7 .excerpt {
    margin-bottom: 0px;
    color: #00bd56;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
}
.block-7 .label2 {
    text-transform: uppercase;
}
.block-7 .pricing-text,
.block-7 .pricing-text li {
    padding: 0;
    margin: 0;
}
.block-7 .pricing-text li {
    list-style: none;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #000000;
}
.block-7 .pricing-text li:nth-child(odd) {
    background: rgba(0, 0, 0, 0.05);
}
.block-7 .pricing-text li span.fa {
    color: #207dff;
}
.block-7 .btn-primary {
    color: #fff;
    text-transform: uppercase;
    font-style: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    width: 60%;
    margin: 0 auto;
}
.block-7 .btn-primary:hover,
.block-7 .btn-primary:focus {
    background: #00bd56 !important;
    color: #fff;
}
.block-7:hover,
.block-7:focus {
    -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
}

  </style>
</head>
<body>

<!--<div class="container">
  
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Password</th>
        <th>Adress</th>
        <th>Bill</th>
       
      </tr>
    </thead>
    <tbody>
-->

    <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2></h2>
            </div>
        </div>
        
                
<?php

$servername="localhost";
$username="root";
$password="";
$database="patients";
$conn = mysqli_connect($servername,$username,$password,$database);
// took publisher name from form
//$publisher1=$_POST['ttkk'];

$sql1 = "SELECT * FROM `list_1`";
// echo $sql;
$result1 = mysqli_query($conn,$sql1);
$i = 0;
while($row1=mysqli_fetch_assoc($result1))
{
    $USERNAME_XYZ = $row1['Username'];
    echo '<div class="row">
    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
        <div class="block-7">
            <div class="img" style="background-color: pink;"></div>
            <div class="text-center p-4">';

    /*$username = $row1['Username'];
    $age = $row1['Age'];
    $password = $row1['paswword'];
    $address = $row1['Adress'];
    $bill = $row1['Bill'];
    */echo '<span class="excerpt d-block">'.$row1['Username'].'</span>'; 
     echo '<span class="price"><sup>₹</sup> <span class="number">'.$row1['Bill'].'</span></span>';
     echo '<ul class="pricing-text mb-5">
     <li><span class="fa fa-check mr-2"></span>Age : '.$row1['Age'].'</li>
                            <li><span class="fa fa-check mr-2"></span>Password : '.$row1['paswword'].'</li>
                            <li><span class="fa fa-check mr-2"></span>Address : '.$row1['Adress'].'</li>
                        </ul>';

                  echo"<form action ='Delete.php' method='post' enctype='multipart/form-data'><button type='submit' name='DELETE_x' value = '$USERNAME_XYZ' class='btn btn-primary d-block px-2 py-3'>Delete</button>
                    </form></div>
                </div>
            </div>
";
     /*echo '<td>'.$row1['Age'].'</td>';
     echo '<td>'.$row1['paswword'].'</td>';
     echo '<td>'.$row1['Adress'].'</td>';
     echo '<td>'.$row1['Bill'].'</td>';
     echo '</tr>';
*/
    // echo '<tr>'; 
    // echo '<td>'.$row['author'].'</td>';
    // echo '<td>'.$row['publisher'].'</td>';
    // echo '</tr>';
    //$sql2 = "SELECT * FROM `titles` WHERE author='$author' ";
    //$result2 = mysqli_query($conn,$sql2);
    //$row2=mysqli_fetch_assoc($result2);
     /*echo '<tr>'; 
     echo '<td>'.$row2['title'].'</td>';
     echo '<td>'.$row2['year'].'</td>';
     echo '</tr>';
    */
    $i = $i+1;    
}
if($i==0)
{
    echo"<h2 style='color:aqua'>No Patients have yet been enrolled in the Hospital</h2>";
}
?>

</body>
</html>