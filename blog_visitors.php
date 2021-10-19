<?php
  include"database.php";
  session_start();
  if(!isset($_SESSION["BID"]))
  {
    echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
    
  }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="icon" href="img/logo.png">
  
  <title>FREE BLOGGER</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
  <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link type="text/css" rel="stylesheet" href="css/style.css" />

  
</head>

<body style="text-align: center;" background="img/pattern.png">
  <header id="home">
    <nav id="main-navbar">
      <div class="container">
      
        <div class="navbar-header">
          <div class="navbar-brand">
            <a class="logo" href="blog_home.php"><img src="img/logo.png" alt="logo"></a>
          </div>

          <button class="navbar-toggle-btn">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <?php include "menu_admin.php";
        ?>    
          
          
        
      </div>
    </nav>

<?php  
 $connect = mysqli_connect("localhost","root","","kvik");  
 $query = "SELECT blog_name, visitors , count(*) as number  FROM blog group by blog_number order by visitors desc LIMIT 10";  
 $result = mysqli_query($connect, $query);  
 ?>  
  
          
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['blog_name', 'Total number of visits'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["blog_name"]."', ".$row["visitors"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                     title: 'POPULAR BLOGS',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  


           }  
           </script>  
   
           <br /><br />  
           <center>
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div> <br>
                
           </div>  
    
      </div>
      <?php include"footer.php";?>
  </body>
</html>