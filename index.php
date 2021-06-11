<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 4</title>
</head>
<body>
    <p>
        Créer une fonction qui retourne deux nombres aléatoires allant de 1 à 15 :
        <ul>
            <li>Si le premier nombre est plus grand que le deuxième, afficher "le premier nombre est plus grand que le deuxième"</li>
            <li>Sinon, si le deuxième nombre est plus grand, afficher "le premier nombre est plus petit que le deuxième"</li>
            <li>Si les deux nombres sont identiques, afficher "les deux nombres sont égaux"</li>
        </ul>
    </p>

    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
        
        function randomNumbers(){

            $number1 = mt_rand(1,15);
            $number2 = mt_rand(1,15);
            echo 'Nombre 1 : ' .$number1. '<br> Nombre 2 : ' .$number2. '<br>';
            if($number1 > $number2){
                echo 'Le premier nombre est plus grand que le deuxième';
            }elseif($number2 > $number1){
                echo 'Le premier nombre est plus petit que le deuxième';
            }else{
                echo 'les deux nombres sont égaux';
            }

            return $number1;
            return $number2;
           
        }
        randomNumbers(); 
        ?>
    </div>
</body>
</html>