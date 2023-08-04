<?php



include ('continents.php');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<select onchange="getval(this)">
    <?php
    if ($result -> rowCount() > 0){
        while ($row = $result -> fetch(PDO::FETCH_ASSOC)){
            echo  '<option>' . $row['continent'] . '</option>';
        }
    }else {
        echo 'coonection filed '. $conn -> connect_error;
    } ?>
</select>
<script> function getval(e){
    fetch (`country.php?param=${e.value}`)
    .then(response => response.json())
    .then (data => {
        const selectElement = $('#drop-menu');
        selectElement.empty();

        for (let i in data) {
            const row = data[i];
            const {name} = row;
            const option = $('<option>').text(name);
            selectElement.append(option);
        }

    })
}  </script>

<select id = 'drop-menu'>
</select>

