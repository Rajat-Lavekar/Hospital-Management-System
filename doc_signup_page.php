<!DOCTYPE html>
<html>

<head>

<title>SignUp</title>
<link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/min/1.5.0/entireframework.min.css"
 integrity="sha512-6m5ZCRMFZCsnMLvCjwrbdZLmNCE52SS5edmlMGzcpMMRTlJY32SoGAljcQ7l+mrm3Ok3n6AR82lV2fN2jS2HsQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="Login.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<meta name="Author" content="SSL Project">
<meta name="Guidelines" content="HMS">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 

<body>
    <style>
        body {
            background-color: #292929;
        }
        </style>
        <h2>Doctor</h2>
    <div class="login">
        <h1>Sign Up</h1>
        <form action="doc_signup.php" method="post">
            <label for="fname">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="fname" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="age">
                <i class="fas fa-font"></i>
            </label>
            <input type="text" name="age" placeholder="Age" id="age" required>

            <label for="address">
                <i class="fas fa-file-signature"></i>
            </label>
            <input type="text" name="add" placeholder="Address" id="add" required>
            <label for="degree">
                <i class="fas fa-file-signature"></i>
            </label>
            <input type="text" name="deg" placeholder = "Specialisation" id = "deg" required>

            <input type="submit" value="Signup">
        </form>
        
        
        
</div>
    </body>
</html>