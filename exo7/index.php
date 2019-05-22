<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 7 part4</title>
    </head>
    <body>
        <?php
        $gender = 'Femme';
        $age = -1;
        
        function perso($gender, $age) {
            echo $gender . ' ' . $age . ' ';
            if ($gender == Homme) {
                echo 'Vous ête un Homme';
            } else {
                echo 'Vous êtes une Femme';
            }
            if ($age > 18) {
                echo ' et vous êtes majeur!';
            } else if ($age <= 0) {
                echo ' votre âge n\'est pas bon !!!';
            } else {
                echo ' vous êtes mineur !';
            }
        }

        perso($gender, $age);
        ?>
    </body>
</html>
