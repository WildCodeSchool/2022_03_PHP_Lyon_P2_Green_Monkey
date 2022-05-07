<?php


$answers = [];

for ($i = 1; $i < 16; $i++) {
    $answers[] = "q" . $i . "_choice" . rand(1, 4);
}

var_dump($answers);


// data to put into query
date_default_timezone_set('Europe/Paris');
$timestamp = "' " . date('Y-m-d H:i:s') . "', ";
$toSave = "q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16";
$placeholders = ":q1, :q2, :q3, :q4, :q5, :q6, :q7, :q8, :q9, :q10, :q11, :q12, :q13, :q14, :q15, :q16";

// preparing query from said data + data we got from POST
$query = "INSERT INTO user_results (date, "
    . $toSave . ", fp_total, fp_cat1, fp_cat2, fp_cat3, fp_cat4) VALUES ("
    . $timestamp . $placeholders . ", " . $totalFootprint . ", "
    . $footprintByCategory[0] . ", " . $footprintByCategory[1] . ", " . $footprintByCategory[2]
    . ", " . $footprintByCategory[3] . ")";

$statement = $this->pdo->prepare($query);

// binding values
$increment = 1;
foreach ($answers as $answer) {
    $valueToBind = "q" . $increment;
    $statement->bindValue($valueToBind, $answer, \PDO::PARAM_STR);
    $increment++;
}

// executing said query
$statement->execute();
