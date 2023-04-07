<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Loading.css">
    <style>
        
        .star-rating {
    font-size: 0;
    white-space: nowrap;
    display: inline-block;
    width: 500px;
    height: 50px;
    overflow: hidden;
    position: relative;
    background:     url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
    background-size: contain;
  }
  .star-rating i {
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 10%;
    z-index: 1;
    background:     url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
    background-size: contain;
  }
  .star-rating input {
    -moz-appearance: none;
    -webkit-appearance: none;
    opacity: 0;
    display: inline-block;
    width: 10%;
    height: 100%;
    margin: 0;
    padding: 0;
    z-index: 2;
    position: relative;
  }
  .star-rating input:hover + i,
  .star-rating input:checked + i {
    opacity: 1;
  }
  .star-rating i ~ i {
    width: 20%;
  }
  .star-rating i ~ i ~ i {
    width: 30%;
  }
  .star-rating i ~ i ~ i ~ i {
    width: 40%;
  }
  .star-rating i ~ i ~ i ~ i ~ i {
    width: 50%;
  }
  .star-rating i ~ i ~ i ~ i ~ i ~ i {
    width: 60%;
  }
  .star-rating i ~ i ~ i ~ i ~ i ~ i ~ i {
    width: 70%;
  }
  .star-rating i ~ i ~ i ~ i ~ i ~ i ~ i ~ i {
    width: 80%;
  }
  .star-rating i ~ i ~ i ~ i ~ i ~ i ~ i ~ i ~ i {
    width: 90%;
  }
  .star-rating i ~ i ~ i ~ i ~ i ~ i ~ i ~ i ~ i ~ i {
    width: 100%;
  }
  ::after,
  ::before {
    height: 100%;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-align: center;
    vertical-align: middle;
  }
        
        </style>

</head>
<body>
    <form action="beta.php" method="post" enctype="multipart/form-data">
    <span class="star-rating">
        <input type="radio" id="a1" name="x" value="1"><i></i>
        <input type="radio" id="b2" name="x" value="2"><i></i>
        <input type="radio" id="c3" name="x" value="3"><i></i>
        <input type="radio" id ="d4" name="x" value="4"><i></i>
        <input type="radio" id="e5" name="x" value="5"><i></i>
        <input type="radio" id="f6" name="x" value="6"><i></i>
        <input type="radio" id="g7" name="x" value="7"><i></i>
        <input type="radio" id="h8" name="x" value="8"><i></i>
        <input type="radio" id ="i9" name="x" value="9"><i></i>
        <input type="radio" id="j10" name="x" value="10"><i></i>
        <br><br>
       
    </span>
    
<?php
$lmtc = $_POST['naaam'];
?>
   <br><br><br><br> <button type="submit"  name= "namepass" value="<?php echo "$lmtc"; ?>" class="b1"><span>Submit</span></button>
    </form>
   



</body>
</html>
