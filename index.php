<?php

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

// database connection and query

$startdate = $_GET["startdate"];
$enddate = $_GET["enddate"];

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo 'Connected successfully';

$db_selected = mysql_select_db('carrera', $con);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

// // database connection

$query = 'select * from look_orders
 where substring(order_date, 1, 7) between "'.$startdate.'" and "'.$enddate.'";';
$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}


if(isset($_GET["startdate"]) && isset($_GET["enddate"]))
{
    // print table
          echo "<table>"; // start a table tag in the HTML
          $result = mysql_query($query);
          while ($row = mysql_fetch_assoc($result))
          {
          echo "<tr><td>" . $row['order_id'] . "</td><td>" . $row['order_date'] . "</td></tr>";
          }
          echo "</table>";
}


mysql_close($con);

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

  <form align="left" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
