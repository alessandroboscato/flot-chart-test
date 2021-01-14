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
