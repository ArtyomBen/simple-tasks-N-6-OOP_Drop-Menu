<?php require_once ('config.php');

$sql = "SELECT DISTINCT continent FROM country ";
$result = $conn -> query($sql);
