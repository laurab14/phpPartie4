<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 3 part4</title>
    </head>
    <body>
        <?php
        $numb1 = 6;
        $numb2 = 6;

        function numb($numb1, $numb2) {
            echo $numb1 . ' ' . $numb2 . ' ';
            if ($numb1 > $numb2){
                echo 'Le premier nombre est plus grand';
            } else if ($numb1 < $numb2) {
                echo 'Le premier nombre est plus petit';
            } else {
                echo 'Les nombres sont identiques';
            }
        }

        numb($numb1, $numb2);
        ?>
    </body>
</html>
