<?php
 $var=$_POST['x'];
//  echo $var;
$user=$_POST['namepass'];
// echo $user;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patients";
$conn = mysqli_connect($servername,$username,$password,$dbname);
echo "<link rel='stylesheet' href='Loading.css'>";
if($var==1)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

       echo "Successful <br><br>";
       echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
    }
    else{
        echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
    }
}
if($var==2)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
  if ($conn->query($sql) === TRUE) {

    echo "Successful <br><br>";
    echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
 }
 else{
     echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
 }
}
if($var==3)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
     }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}
if($var==4)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
     }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}
if($var==5)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
    }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}
if($var==6)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
     }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}

if($var==7)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
     }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}
if($var==8)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
     }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}
if($var==9)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>";
     }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}
if($var==10)
{
    $sql = "UPDATE list_1 SET rating='$var' WHERE Username='$user'";
    if ($conn->query($sql) === TRUE) {

        echo "Successful <br><br>";
        echo"<form action='login_page.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Login</span></button></form>"; 
     }
     else{
         echo "<h2 style='color:red'>Error: </h2>" . $sql . "<br>" . $conn->error;
     }
}

?>
