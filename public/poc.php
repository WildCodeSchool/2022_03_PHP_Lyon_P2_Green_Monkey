<?php

require_once "questions_table.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  $ integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>POC Questionnaire</title>
</head>

<body>
  <h1 class="display-1">Calculez votre empreinte carbone</h1>
  <form action="results.php" method="post">

    <?php
    $i = 0;
    foreach ($questions as $question) {
        $i++;
        ?>

      <div>

        <p>
          <label for="q<?= $i ?>"><?= $i . ". " . $question["title"] ?></label>
        </p>

        <p class="form-check">
          <input class="form-check-input" type="radio" id="choice1" name="q<?= $i ?>"
          value="<?= $question["result1"] ?>">
          <label class="form-check-label" for="q<?= $i ?>"><?= $question["choice1"] ?></label>
        </p>

        <p class="form-check">
          <input class="form-check-input" type="radio" id="choice2" name="q<?= $i ?>"
          value="<?= $question["result2"] ?>">
          <label class="form-check-label" for="q<?= $i ?>"><?= $question["choice2"] ?></label>
        </p>

        <p class="form-check">
          <input class="form-check-input" type="radio" id="choice3" name="q<?= $i ?>"
          value="<?= $question["result3"] ?>">
          <label class="form-check-label" for="q<?= $i ?>"><?= $question["choice3"] ?></label>
        </p>

        <p class="form-check">
          <input class="form-check-input" type="radio" id="choice4" name="q<?= $i ?>"
          value="<?= $question["result4"] ?>">
          <label class="form-check-label" for="q<?= $i ?>"><?= $question["choice4"] ?></label>
        </p>

      </div>

    <?php } ?>

    <p>
      <input class="btn btn-primary btn-lg" type="submit" value="Soumettre" />
    </p>
  </form>
</body>

</html>
