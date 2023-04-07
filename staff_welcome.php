<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="Loading.css">
</head>
<body>
    

<?php
    $name = $_POST['login'];
    $arr = ['You have been assigned to help Dr. Shirish on the Occular Surgery being conducted in the Operation Theatre',
            'Please Report to Operation Theatre no.2 quickly, Dr Kamal needs assistance on his rhinoplasty surgery',
            'Its already late, change in your robes and report to Operation theatre no.4',
            'Please Wait, Dr Prabhu will be with you in quite some time',
            'You have been assigned to assist Dr. Lokesh on the Hip replacement surgery, He will be with you in some time',
            'Assistance is needed on 2nd floor, please report quickly'
];

    $x = rand(0,5);

    echo "<h1>Hi $name</h1><br><br><br>";
    echo "<b style='color:orange'>The following are your instructions to be carried out : </b>";
    echo "<big><p style='color: aliceblue;'>$arr[$x]</p></big><br><br><br><br><br>";
    echo "<h3>To View the generated feedback of the patients, click on the button below :</h3><br><br>";
    echo "<form action ='staff_feedback.php' method='post' enctype='multipart/form-data'><button type='submit' name='' value = '' class='b1'><span>View Feedback</span></button>
    </form>"


?>
</body>
</html>