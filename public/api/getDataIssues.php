<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "db_network");

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
