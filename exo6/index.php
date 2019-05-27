<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6 part4</title>
    </head>
    <body>
        <?php
        $lastName = 'Bidois';
        $firstName = 'Laura';
        $age = 27;

        function perso($lastName, $firstName, $age) {
            echo 'Bonjour '. $lastName .' '. $firstName . ', tu as ' . $age . ' ans.';
        }

        perso($lastName, $firstName, $age);
        ?>
    </body>
</html>
