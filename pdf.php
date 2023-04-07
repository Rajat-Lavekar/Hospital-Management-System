<?php
require('vendor/autoload.php');

$var_yy=$_POST['var1'];
//   echo $var_yy;
 $var_yyy=$_POST['var2'];
// echo $var_yyy;
  //echo "<p style='color: aliceblue;'>$vara</p>";
$con = mysqli_connect('localhost','root','','patients');
$res = mysqli_query($con,"select * from list_1 where Username='$var_yy'");
if(mysqli_num_rows($res)>0)
{
$html='<table>';
$html.='<tr><td>ID</td><td>Username</td><td>Password</td><td>Bill</td><td>Doctor evaluation</td></tr>';
while($row=mysqli_fetch_assoc($res))
{
    $html.='<tr><td>'.$row['id'].'</td><td>'.$row['Username'].'</td><td>'.$row['paswword'].'</td><td>'.$row['Bill'].'</td><td>'.$row['Doctors_evaluation'].'</td></tr>';
}

$html.='</table>';
}
else{
$html = "Data not found";
}
// echo $html;
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->output("Medical_Report.pdf",'D');
?>