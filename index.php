<?php
// This report retrieves all released / completed records from the tacojobs table.

// Number of records to display per page:
$items_per_page = 25;

$page_title = 'PHP Production Jobs';
$report_title = 'Jobs Completed / Released for Production';


// Set the status of your report.
if (isset($_GET['status'])) {

     $_SESSION["status"] = $_GET['status'];
	 $status = $_SESSION["status"];

} else {

	// Default status
	$status = 'r';
}

// database connection
require('mysql_connection.php');

$arr = [];

while ($row = mysql_fetch_assoc($result)) {
    echo $row["id"];
    $arr = $result;
}

var_dump($arr);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Report look</title>
</head>
<body>

  <form method="post" action="mysql_connection.php">
    <label for="startdate"><strong>Select date: </strong></label></br>
    From<input id="startdate" type="date" name="startdate" value="">
    To<input id="enddate" for="enddate" type="date" name="enddate" value=""></br></br>
    <input type="submit" name="submit" value="Submit">
  </form>



<div id="placeholder" style="width:600px;height:300px"></div>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
  <script type="text/javascript" src="main.js">

  </script>

</body>
</html>
