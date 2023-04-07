<?php
$con=mysqli_connect("localhost","root","","patients");

echo "<link rel='stylesheet' href='Loading.css'>";

if($con)
{
//   echo "connected";
}
?>

<?php
$case = array(0,0,0,0,0,0,0,0,0,0);
$cas = array(0,0,0,0,0,0,0,0,0,0);
$sql = "SELECT * FROM list_1";
$fire=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($fire))
{
$rating=$row['rating'];
// echo $rating;
if($rating==1){ $case[0]=$case[0]+1; }
if($rating==2){ $case[1]=$case[1]+1; }
if($rating==3){ $case[2]=$case[2]+1; }
if($rating==4){ $case[3]=$case[3]+1; }
if($rating==5){ $case[4]=$case[4]+1; }
if($rating==6){ $case[5]=$case[5]+1; }
if($rating==7){ $case[6]=$case[6]+1; }
if($rating==8){ $case[7]=$case[7]+1; }
if($rating==9){ $case[8]=$case[8]+1; }
if($rating==10){ $case[9]=$case[9]+1; }
}
$cas[0]="1 star";
$cas[1]="2 star";
$cas[2]="3 star";
$cas[3]="4 star";
$cas[4]="5 star";
$cas[5]="6 star";
$cas[6]="7 star";
$cas[7]="8 star";
$cas[8]="9 star";
$cas[9]="10 star";
// echo $case[9];
//  echo $case[3];
 //echo $case[5];
echo "<h2>Ratings</h2><br>";
?>




<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['RATINGS', 'people'],
          <?php
        
        for($i = 0; $i < 10; $i++)
        {
       echo "['".$cas[$i]."','".$case[$i]."'],";
        }
        ?>
        ]);

        var options = {
          chart: {
            // title: 'Company Performance',
            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>