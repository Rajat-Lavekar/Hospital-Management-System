<!DOCTYPE html>
<html lang="en">
<head>
  <title>List of Patients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="Loading.css">
  <?php
      $name = $_POST['login'];
      echo"<h2>Welcome Doctor ".$name."</h2>"; 

  ?>
</head>
<body>

  <br><br><br>
  <h3 style="color: burlywood;">Click Below to View the List of Patients currently enrolled in our Hospital</h3>
<br><form action ='doctors_sample.php' method='post' enctype='multipart/form-data'><button type='submit' class='b1'><span>List Of Patients</span></button></form> 

</body>
</html>