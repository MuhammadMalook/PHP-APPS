<?php
include_once("connect.php");
$sqlQuery = "SELECT date, total_slp FROM cron";
$resultset = mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));
$cron = "{";
while( $records = mysqli_fetch_array($resultset) ) {
   $cron.='"'.$records['date'].'":'.$records['total_slp'].',';        
}
$cron=rtrim($cron,",");
$cron.="}";
$data[] = $cron;
echo json_encode($data);
exit;
?>