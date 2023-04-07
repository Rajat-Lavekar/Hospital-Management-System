<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc's Waiting</title>
    <link rel = "stylesheet" href="Loading.css">

    <?php
$var_xx=$_POST['hh'];
echo "<br><big style='color:yellow'>Hello $var_xx</big>";
?>




</head>

<body>
   
        
<h2>The Doctor Is Examining You<br></h2>
<div class="mosaic-loader">
  <div class="cell d-0"></div>
  <div class="cell d-1"></div>
  <div class="cell d-2"></div>
  <div class="cell d-3"></div>
  <div class="cell d-1"></div>
  <div class="cell d-2"></div>
  <div class="cell d-3"></div>
  <div class="cell d-4"></div>
  <div class="cell d-2"></div>
  <div class="cell d-3"></div>
  <div class="cell d-4"></div>
  <div class="cell d-5"></div>
  <div class="cell d-3"></div>
  <div class="cell d-4"></div>
  <div class="cell d-5"></div>
  <div class="cell d-6"></div>
</div>
<br>

<?php
$servername="localhost";
$username="root";
$password="";
$database="patients";
$conn = mysqli_connect($servername,$username,$password,$database);


$answer = $_POST['Issue'];  
$var =0;
if ($answer == "ear_") {          
    $var =1;      
}
else if($answer == "nose_")
{
    $var =2;
}
else if($answer == "eye_")
{
    $var =3;
}
else if($answer == "ortho_")
{
    $var =4;
}
else {
    echo 'Incorrect';
}     
// echo $var;     
$del ="0";
$ear_x = ["After a complete checkup, The Doctor has come to conclusion that the Patient has Accoustic Neuroma",
"After evaluating the patient, The Doctor has concluded with the Coechlear Implant Surgery to be undergone",
"After the conducted checkup, The Doctor has made clear in his report that the patient suffers from Meneirs disease"];

$ear_y = ["4,40,000","2,80,000","3,50,000"];


$eye_x = ["Regarding the Patient's evaluation, The Doctor's released statement states that the patient must go through an Occular Surgery"
,"The Patient is been suffering from Cataract from the past few weeks, Cataract surgery must be performed as soon as feasible",
"The current checkup has forced the Doctor to immediateley suggest the Patient to undergo Glaucoma Surgery, which could result in loss of vision if left unattended"];
$eye_y = ["70,000","40,000","4,00,000"];

$nose_x = ["After evaluating the patient, The Doctor has concluded with the Rhinoplasty surgery to be undergone",
"The Doctor's evaluation states that the Patient must undergo Septoplasty",
"The conducted checkup by the Doctor, states that Sinus surgery must be undergone"];
$nose_y = ["1,80,000","60,000","90,000"];

$ortho_x = ["The Doctor is finished with her evaluation that the Patient has to undergo Knee Arthroscopy",
"The Ankle of the Patient is severely injured, hence an Ankle repair surgery must be undergone",
"The disbalance in the Patient's physique has come to conclude that the Patient must undergo Hip Replacement surgery"];
$ortho_y = ["1,20,000","20,000","3,20,000"];

$x = rand(0,2);

if ($var == 1) {          

  
  $sql22 = "UPDATE list_1 SET Doctors_evaluation='$ear_x[$x]' WHERE Username='$var_xx'";
  if ($conn->query($sql22) === TRUE) {
    // echo "Record updated successfully";
  } else {
    // echo "Error updating record: " . $conn->error;
  }

    echo "<p style='color: aliceblue;'>$ear_x[$x]</p>";
    echo "<p style='color: aliceblue;'>Bill to be paid : ₹ $ear_y[$x]</p>";
    $del = $ear_x[$x];
    $sql = "UPDATE list_1 SET Bill='$ear_y[$x]' WHERE Username='$var_xx'";
    if ($conn->query($sql) === TRUE) {
        echo "";
      } else {
        echo "Error updating record: " . $conn->error;
      }
}
else if($var == 2)
{
  $sql22 = "UPDATE list_1 SET Doctors_evaluation='$nose_x[$x]' WHERE Username='$var_xx'";
  if ($conn->query($sql22) === TRUE) {
    // echo "Record updated successfully";
  } else {
    // echo "Error updating record: " . $conn->error;
  }


  echo "<p style='color: aliceblue;'>$nose_x[$x]</p>";
  echo "<p style='color: aliceblue;'>Bill to be paid : ₹ $nose_y[$x]</p>";
  $del = $nose_x[$x];
  $sql = "UPDATE list_1 SET Bill='$nose_y[$x]' WHERE Username='$var_xx'";
  if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
else if($var == 3)
{
  $sql22 = "UPDATE list_1 SET Doctors_evaluation='$eye_x[$x]' WHERE Username='$var_xx'";
  if ($conn->query($sql22) === TRUE) {
    // echo "Record updated successfully";
  } else {
    // echo "Error updating record: " . $conn->error;
  }
  echo "<p style='color: aliceblue;'>$eye_x[$x]</p>";
  echo "<p style='color: aliceblue;'>Bill to be paid : ₹ $eye_y[$x]</p>";
  $del = $eye_x[$x];
  $sql = "UPDATE list_1 SET Bill='$eye_y[$x]' WHERE Username='$var_xx'";
  if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
else if($var == 4)
{
  $sql22 = "UPDATE list_1 SET Doctors_evaluation='$ortho_x[$x]' WHERE Username='$var_xx'";
  if ($conn->query($sql22) === TRUE) {
    // echo "Record updated successfully";
  } else {
    // echo "Error updating record: " . $conn->error;
  }
  echo "<p style='color: aliceblue;'>$ortho_x[$x]</p>"; 
  echo "<p style='color: aliceblue;'>Bill to be paid : ₹ $ortho_y[$x]</p>"; 
  $del = $ortho_x[$x];
  $sql = "UPDATE list_1 SET Bill='$ortho_y[$x]' WHERE Username='$var_xx'";
  if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}  
else {
  echo 'Incorrect';}

?>
<style>

.rad-label {
  display: flex;
  align-items: center;

  border-radius: 100px;
  padding: 14px 16px;
  margin: 10px 0;

  cursor: pointer;
  transition: 0.3s;
}

.rad-label:hover,
.rad-label:focus-within {
  background: hsla(0, 0%, 80%, 0.14);
}

.rad-input {
  position: absolute;
  left: 0;
  top: 0;
  width: 1px;
  height: 1px;
  opacity: 0;
  z-index: -1;
}

.rad-design {
  width: 22px;
  height: 22px;
  border-radius: 100px;

  background: linear-gradient(
    to right bottom,
    hsl(154, 97%, 62%),
    hsl(225, 97%, 62%)
  );
  position: relative;
}

.rad-design::before {
  content: "";

  display: inline-block;
  width: inherit;
  height: inherit;
  border-radius: inherit;

  background: hsl(0, 0%, 90%);
  transform: scale(1.1);
  transition: 0.3s;
}

.rad-input:checked + .rad-design::before {
  transform: scale(0);
}

.rad-text {
  color: hsl(0, 0%, 60%);
  margin-left: 14px;
  letter-spacing: 3px;
  text-transform: uppercase;
  font-size: 18px;
  font-weight: 900;

  transition: 0.3s;
}

.rad-input:checked ~ .rad-text {
  color: hsl(0, 0%, 40%);
}

/* ABS */
/* ====================================================== */
.abs-site-link {
  position: fixed;
  bottom: 40px;
  left: 20px;
  color: hsla(0, 0%, 0%, 0.5);
  font-size: 16px;
}


</style>
<hr><hr>
<h3>Click Both the buttons below to make sure you are not a robot</h3>
<div>
<form action="pdf.php"  method="post" enctype="multipart/form-data">
<label class="rad-label">
    <input type="radio" class="rad-input" name="var1" value="<?php echo "$var_xx"; ?>" required>
    <div class="rad-design"></div>
    <div class="rad-text"></div>
  </label>

  <label class="rad-label">
    <input type="radio" class="rad-input" name="var2" value="<?php echo "$del"; ?>" required>
    <div class="rad-design"></div>
    <div class="rad-text"></div>
  </label>

</div>
<!--<input type="radio" name="var1" value="</?php echo "$var_xx"; ?>" required>
<input type="radio" name="var2" value="</?php echo "$del"; ?>" required><br><br><br>-->
    <button type="submit" id = "" class="b1" name="login_1" value=""><span>Generate pdf</span></button></form>
    <br><form action="patient_feedback.php"  method="post" enctype="multipart/form-data">
      <h3>Enter your feedback here if any</h3>
    <button type="submit" id = "" class="b1" name="naaam" value="<?php echo "$var_xx"; ?>"><span>Feedback</span></button>
    </form>
</body>
</html>





