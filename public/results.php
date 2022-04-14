<?php

// Total footprint
$totalFootprint = array_sum($_POST);

// Partial footprint
$footprintCategories = array_chunk($_POST, 4, false);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POC Results</title>
</head>

<body>
    <?php echo "Votre bilan carbone total :<br>" .
        $totalFootprint .
        "<br>" .
        "<br>" .
        "Par catégorie :<br>";

    foreach ($footprintCategories as $footprintCategory) {
        $resultByCategory = array_sum($footprintCategory);
        echo $resultByCategory . "<br>";
    }

    ?>
</body>

</html>