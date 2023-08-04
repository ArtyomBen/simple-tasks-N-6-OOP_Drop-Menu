<?php
require ('config.php');
$value = $_GET['param'];
   $sql1 = "SELECT name FROM country WHERE continent = '" . $value . "' ";
   $result = $conn -> query($sql1);
   if ($result -> rowCount() > 0){
    $finish = $result -> fetchAll (PDO::FETCH_ASSOC);
    echo json_encode ($finish);
}

?>