<?php
$servername="localhost";
$username="root";
$password="";
$database="patients";
$conn = mysqli_connect($servername,$username,$password,$database);

$var = $_POST['DELETE_x'];
  
echo "<h1 style='color:aqua'>Welcome Doctor "."$var"."</h1>";
echo "<link rel = 'stylesheet' href='Loading.css'>


<form action='doctor_evaluation_update.php'  method='post' enctype='multipart/form-data'>
<h2>

<h2>Enter Your Medical Conclusion, if you want to update the previous assigned report of the patient</h2>

<textarea id='mytextarea' name ='tex'placeholder='Enter your conclusion here.'
          style='width: 350px;height: 200px;
                 padding: 10px; border:3px dashed indigo;
                 background-color:aliceblue'>
                 </textarea>
<input type='radio' name='var1' value='$var' required><br>
<button type='submit'  class='b1' name='' value= ''><span>Submit</span></button>
</h2>

</form>
<button class='b1' onclick='toggle();'><span>Toggle style</span></button>
<br>
<form action='Home_1.php'  method='post' enctype='multipart/form-data'>
<button type='submit'  class='b1' name='' value= ''><span>Return To Home</span></button></form>

<script>
  let toggle = () => {
     let element = document.getElementById('mytextarea');

     if (element.style.backgroundColor === 'aliceblue') {
       element.style.backgroundColor = 'seashell';
       element.style.borderColor = 'chocolate';
    } else {
       element.style.backgroundColor = 'aliceblue';
       element.style.borderColor = 'indigo';
    }
  }
</script>
";
$sql1 = "SELECT * FROM `list_1` WHERE Username='$var'";
// echo $sql;
$result1 = mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_assoc($result1))
{

 echo '<h2 style="color:yellow">The previous report assigned to the patient was :</h2><h2> <span class="excerpt d-block">'.$row1['Doctors_evaluation'].'</span></h2>'; 
}



?>