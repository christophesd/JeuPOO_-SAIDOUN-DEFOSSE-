<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu POO</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        html {
            scroll-behavior: smooth;
            overflow: hidden;
            
        }
        body {
            background-image: linear-gradient( 109.6deg,  rgba(247,202,201,1) 20.6%, rgba(146,168,209,1) 85.9% );
        }
        #game {
            font-size: 12px; 
        }
        .comteur {
            font-size: 300px;
        }
    </style>
</head>

<body>


    <div class="container" id="form">
        <div class="row justify-content-center align-items-center" style="height:100vh;">
            <div class="row">

                <div class="col-12 mb-5 text-center">
                    <h5>Indiquez le nom de vos combatants :</h5>
                </div>

                <div class="col">
                    <form class="form-inline" method="GET" action="#game">
                        <div class="form-group mx-auto">
                            <div class="form-group mb-2">
                                <label for="player1" class="sr-only">Joueur 1</label>
                                <input type="text" class="form-control" id="player1" name="player1"
                                    placeholder="Joueur 1" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="player2" class="sr-only">Joueur 2</label>
                                <input type="text" class="form-control" id="player2" name="player2"
                                    placeholder="Joueur 2" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mb-2" data-toggle="tooltip" data-placement="bottom" title="Que le combat commence !!">Jouer</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh;">
            <div class="col text-center">
                <img src="https://img.pngio.com/karate-sport-combat-free-image-on-pixabay-combat-png-960_480.png" width="50%" alt="">
            </div>
        </div>
    </div>

    <div class="container" id="game">
        <div class="row justify-content-center align-items-center" style="height:100vh;">
            <div class="row">
                <div class="col-auto mx-auto">
                    <?php 
                    
                        require_once 'Joueur.php'; 
                    
                        if ( !empty($_GET['player1']) AND !empty($_GET['player2']) ) {
                            $joueur1 = new Joueur(htmlentities($_GET['player1']));
                            $joueur2 = new Joueur(htmlentities($_GET['player2']));
                            $joueur1->combat($joueur1, $joueur2);
                        }
                    
                    ?>
                </div>

                <div class="col-12 mt-5 text-center">
                    <a class="btn btn-primary" href="#form" role="button">Re-Jouer</a>
                </div>
            </div>
        </div>
                
    </div>










    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>