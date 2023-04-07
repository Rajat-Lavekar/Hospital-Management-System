<?php
   $var=$_POST['login'];
   // echo "$var";
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>welcome</title>
</head>
<body>
<ul>
   <li><label class="control-label"><?php echo "$var" ?> <img src="img_avatar.png" alt="Avatar" class="avatar"></label></li>
</ul>


</body>
</html>
 -->


<!DOCTYPE html>
<html>

<head>

<title>Patient Querries</title>
<link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/min/1.5.0/entireframework.min.css"
 integrity="sha512-6m5ZCRMFZCsnMLvCjwrbdZLmNCE52SS5edmlMGzcpMMRTlJY32SoGAljcQ7l+mrm3Ok3n6AR82lV2fN2jS2HsQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="Radio.css">
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
   </style>
</head> 

<header>

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h2 class="display" style="font-family:Verdana, Geneva, Tahoma, sans-serif;color: aliceblue;"><br><br>“The human body has been designed to resist an infinite number of changes and attacks brought about by
               its environment. The secret of good health lies in successful adjustment to changing stresses on the body.”<br><br>
                – Harry J. Johnson</h2><br>
          <p class="lead mb-0"></p>
        </div>
      </div>
    </div>
  </header>
<body>

<br>
<ul>
   <li><label class="control-label"><?php echo "Hello $var" ?> <img src="img_avatar.png" alt="Avatar" class="avatar"></label></li>
</ul>
<br/>
<!--There needs to be a PHP code above this line-->
<h2>Please State the Health issues of The Patient below</h2>



<input id="rotated" type="checkbox" name="rotated" checked><label for="rotated">Rotate the form</label>
<form action="meeting_doc.php" method="post" enctype="multipart/form-data">
	<h3 data-text="Enter Your choice below">Enter Pain related areas below</h3>
	<label data-text="Ear">
		<input type="radio" name="Issue" id= "ear"value="ear_" required> Ear
		<span class="dot"></span>
		<span class="dot-shadow"></span>
	</label>
	<label data-text="Nose">
		<input type="radio" name="Issue" id="nose" value="nose_" required> Nose
		<span class="dot"></span>
		<span class="dot-shadow"></span>
	</label>
	<label data-text="Eye">
		<input type="radio" name="Issue" id="eye"value="eye_" required> Eye
		<span class="dot"></span>
		<span class="dot-shadow"></span>
	</label>
	<label data-text="Orthopaedic">
		<input type="radio"id="ortho" name="Issue" value="ortho_" required> Orthopaedic
		<span class="dot"></span>
		<span class="dot-shadow"></span>
	</label>
    <button type="submit" name='hh' value='<?php echo "$var";?>' class="b1"><span>Enter the Doctor's room</span></button>
</form>




<form action="signup_page.php"  method="post" enctype="multipart/form-data">
    <button type="submit" id = "" class="b1" name="login" value="Login"><span>Go Back to SignUp</span></button></form>
    <pre></pre><form action="login_page.php"  method="post" enctype="multipart/form-data">
    <button type="submit" class="b1" name="login" value="Login"><span>Go Back to Login</span></button></form> 
</div>

</body>
</html>


