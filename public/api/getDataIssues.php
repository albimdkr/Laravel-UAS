<?php
//dev
$dbHost = getenv('DB_HOST');
$dbPort = getenv('DB_PORT');
$dbName = getenv('DB_DATABASE');
$dbUser = getenv('DB_USERNAME');
$dbPassword = getenv('DB_PASSWORD');

// Connect DB
$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);

//prod
// $connection = mysqli_connect("db4free.net", "kelompok7", "kelompok7", "db_uas_pbo2");

// Issues List Status
$totalOpen = mysqli_query($connection, "SELECT COUNT(*) FROM issues WHERE status = 'Open'");
$totalInProgress = mysqli_query($connection, "SELECT COUNT(*) FROM issues WHERE status = 'In Progress'");
$totalPending = mysqli_query($connection, "SELECT COUNT(*) FROM issues WHERE status = 'Pending'");
$totalClosed = mysqli_query($connection, "SELECT COUNT(*) FROM issues WHERE status = 'Closed'");

$dataStatusIssue = [
    'totalOpen' => mysqli_fetch_array($totalOpen)[0],
    'totalInProgress' => mysqli_fetch_array($totalInProgress)[0],
    'totalPending' => mysqli_fetch_array($totalPending)[0],
    'totalClosed' => mysqli_fetch_array($totalClosed)[0],
];

header('Content-Type: application/json');
echo json_encode($dataStatusIssue);
?>
