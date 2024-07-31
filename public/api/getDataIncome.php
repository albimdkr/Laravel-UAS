<?php
$dbHost = getenv('DB_HOST');
$dbPort = getenv('DB_PORT');
$dbName = getenv('DB_DATABASE');
$dbUser = getenv('DB_USERNAME');
$dbPassword = getenv('DB_PASSWORD');

// Connect DB
$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);

// Income
$totalElectronicIn = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Electronic'");
$totalToolIn = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Tool'");
$totalFurnitureIn = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Furniture'");

$dataIncome = [
    'totalElectronicIn' => mysqli_fetch_array($totalElectronicIn)[0],
    'totalToolIn' => mysqli_fetch_array($totalToolIn)[0],
    'totalFurnitureIn' => mysqli_fetch_array($totalFurnitureIn)[0],
];

header('Content-Type: application/json');
echo json_encode($dataIncome);
?>
