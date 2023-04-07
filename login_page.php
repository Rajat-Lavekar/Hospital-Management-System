<!DOCTYPE html>
<html>

<head>

<title>Login</title>
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

.b1 {
    border-radius: 4px;
    background-color: #e98222;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 300px;
    transition: all 0.4s;
    cursor: pointer;
    margin: 5px;
  }
  
  .b1 span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.4s;
  }
  
  .b1 span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.4s;
  }
  
  .b1:hover span {
    padding-right: 25px;
  }
  
  .b1:hover span:after {
    opacity: 1;
    right: 0;
  }


</style>
    <div class="login">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username_i" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="pass_2" placeholder="Password" id="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <form action="Home_1.php" method="post">
        <button type="submit" class="b1"><span>Back to Home</span></button></form>
    
</body>
</html>