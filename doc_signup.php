<?php

echo '<link rel="stylesheet" href="Loading.css">';
	$db = new mysqli("localhost","root","");

	 $db->query("CREATE DATABASE IF NOT EXISTS `Doctors`");  // this line checks if the database has been created if not it create a database
 
	         mysqli_select_db($db,"Doctors"); //this line select the created database
 
	         $stable="CREATE TABLE IF NOT EXISTS list_1 (
                 id int(11) NOT NULL auto_increment,   
	             Username varchar(30)NOT NULL,
                 Age int(11)NULL,
	             paswword varchar(30)NOT NULL,
                 Adress varchar(30)NOT NULL,
                 Specialisation varchar(30)NOT NULL,
	             PRIMARY KEY(id) )";
	             $db->query($stable);  
                 

                             $servername = "localhost";
                             $username = "root";
                             $password = "";
                             $dbname = "Doctors";
                 $conn = new mysqli("localhost","root","", $dbname);
                 $name=$_POST['fname'];
                 $password=$_POST['password'];
                 $age=$_POST['age'];
                 $adress=$_POST['add'];
                 $deg = $_POST['deg'];
                

                //  $sql3 = "SELECT * FROM `list_1` where username='$name' AND paswword ='$password'";
                //     $result3 = mysqli_query($conn,$sql3);
                        //    $j=0;

                        //   while($row1=mysqli_fetch_assoc($result3))
                        // {
                        //        $j=$j+1; 
   
                        // }
                               
                $sql3 = "SELECT * FROM `list_1` where username='$name'";
                $sql4 = "SELECT * FROM `list_1` where paswword ='$password'";
                $result3 = mysqli_query($conn,$sql3);
                $result4 = mysqli_query($conn,$sql4);
                $j=0;

                while($row1=mysqli_fetch_assoc($result3))
              {
                     $j=$j+1; 

              }
                       
              while($row1=mysqli_fetch_assoc($result4))
              {
                     $j=$j+1; 

              }

                       $j=(int)$j;
                        if($j==0)
                        {
                          $sql = "INSERT INTO `list_1`(`Username`, `Age`, `paswword`, `Adress`,`Specialisation`) VALUES ('$name','$age','$password','$adress','$deg')";
                          if ($conn->query($sql) === TRUE) {
                            echo "<h2>Signup Succesfull</h2>";
                            echo"<form action='Home_1.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value=''><span>Back to Home</span></button></form>";
                           echo '<script type="tepatients/javascript"> window.open("epatientsra.php","_self");</script>';  
                          } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                          }  
                        }
                        else{
                          echo "<b style='color:red'>Signup Unsucessful</b>";
                        }
                        $conn->close();
?>

