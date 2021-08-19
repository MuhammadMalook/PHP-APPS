<?php

require_once 'connect.php';
require_once 'header.php';

 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM cron ORDER BY date ASC LIMIT 7";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $date[]  = $row['date'] ;
            $total_slp[] = $row['total_slp'];
        }
 
 }
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
        <style>
            .wrapper {
                height: 300px !important;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div style="width:60%;hieght:20%;text-align:center; margin:auto">
            <h2 class="page-header" >Scholars Total SLP </h2>
        </div>  
            <div>total SLP </div>
            <div class="wrapper">
                    <canvas id="chartjs_bar" width="1200" height="400"></canvas>
            </div>
         
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($date); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($total_slp); ?>,
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                                yAxes: [{
                                   ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5
                }
            }]
        },
                           legend: {
                        display: false,
                        position: 'bottom',
                        responsive: true,			 
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
                    
 
 
                }
                
              
                });
    </script>
</html>
