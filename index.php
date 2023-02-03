<?php
require_once __DIR__ . '/models/Movies.php';
require_once __DIR__ . '/models/Cast.php';


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
            $movieTheMist = new Movies('The Mist','horror' ,'120 minuti','roba strana dall\'inferno, finale trumatico', new Cast ('Thomas Jane', 'Laurie Holden', 'devil') );
            $movieTitanic = new Movies('Titanic','romatico' ,'dura troppo','Una nave inaffondabile che poi affonda',new Cast ('Leonardo DiCaprio ', 'Kate Winslet', 'iceberg') );
            
            var_dump($movieTheMist,$movieTitanic);
            ?>
        </pre>
    </main>
</body>
</html>