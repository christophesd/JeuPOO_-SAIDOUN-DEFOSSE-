<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu POO</title>
</head>

<body>

    <!-- Connexion aux Class -->
    <?php require_once 'Joueur.php'; 
    
    
    $joueur1 = new Joueur('Chris');
    $joueur2 = new Joueur('Bot');

    $joueur1->combat($joueur1, $joueur2);

    
    
    ?> 





</body>

</html>