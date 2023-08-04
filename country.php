<?php
require ('config.php');
$value = $_GET['param'];
   $sql = "SELECT name FROM country WHERE continent = '" . $value . "' ";
   $result = $conn -> query($sql);
   if ($result -> rowCount() > 0){
    $finish = $result -> fetchAll (PDO::FETCH_ASSOC);
    echo json_encode ($finish);
}

?>