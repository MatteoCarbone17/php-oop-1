<?php
require_once __DIR__ . '/models/Cast.php';
require_once __DIR__ . '/models/Movie.php';
$movieTheMist = new Movie('The Mist', 'horror', '120 minuti', 'roba strana dall\'inferno, finale trumatico', 8, new Cast('Thomas Jane', 'Laurie Holden', 'devil'));
$movieTitanic = new Movie('Titanic', 'romatico', 'dura troppo', 'Una nave inaffondabile che poi affonda', 5, new Cast('Leonardo DiCaprio ', 'Kate Winslet', 'iceberg'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <main>
        <h1>
            OOP PHP MOVIES
        </h1>
        <pre>
            <?php
               var_dump($movieTheMist);
             ?>
        </pre>
        <p>
            <?php
            var_dump($movieTheMist->getRating());
            ?>

        </p>
        <pre>
            <?php
                 var_dump($movieTitanic);
             ?>
        </pre>
        <p>
        <?php
            var_dump($movieTitanic->getRating());
            ?>
        </p>
    </main>
</body>

</html>