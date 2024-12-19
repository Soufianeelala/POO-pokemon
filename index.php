<!DOCTYPE html>
<html lang="en">
<?php include('pokemon.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
</head>

<body>
    <?php
    // Création d'un Pokémon
    $bulbizarre = new Pokemon('Bulbizarre', 200, 'Plante et Poison', 180);
    $pikachu = new Pokemon("Pikachu", 244, "Électrique", 190);  
    $Charizard = new Pokemon("Charizard", 255, "Feu", 194);


    // Affichage des informations du Pokémon
    echo $pikachu->pokedex(); 
    echo $Charizard->pokedex(); 

    echo $bulbizarre->pokedex();
    $Charizard->arene($bulbizarre);

   



    ?>
</body>

</html>
