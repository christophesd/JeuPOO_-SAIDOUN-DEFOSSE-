<?php


Class Joueur 
{
    private $_nom;
    private $_vie; // pour se defendre
    private $_force; // pour attaquer
    private $_atk; // puissance d'attaque
    private $_def; // puissance de défence
    private $_niveau;

    public function __construct(string $nom, int $vie = 100, int $force = 100, int $atk = NULL, int $def = NULL)
    {
        $this->_nom = $nom;
        if ($atk == NULL) {
            $atk = rand(10,50);
        }
        if ($def == NULL) {
            $def = rand(10,50);
        }
        $this->_vie = $vie; // sur 100
        $this->_force = $force; // sur 100
        $this->_atk = $atk; // sur 50
        $this->_def = $def; // sur 50
        $this->_niveau = 1;
    }

    
    public function getNom() {
        return $this->_nom;
    }
    public function getVie() {
        return $this->_vie;
    }
    public function getForce() {
        return $this->_force;
    }
    public function getNiveau() {
        return $this->_niveau;
    }

    public function setVie($vie) {
        $this->_vie = $vie;
    }   
    public function setForce($force) {
        $this->_force = $force;
    }   

    public function description()
    {
        if  ( $this->_vie <= 0 )
        {
            echo "$this->_nom est mort ! :'(<br>";
        } else {
            echo "Je suis $this->_nom j'ai $this->_vie de vie, $this->_force de force et j'ai $this->_atk d'attaque, $this->_def de défence et je suis de niveau $this->_niveau.<br>";
        }
    }

    public function attaque($cible)
    {
        $win = false;
        if  ( $this->_vie <= 0 ) {

            $cible->_niveau++;
            echo "$this->_nom à perdu ! $cible->_nom à gagner et prend donc 1 niveau !<br><br>";
            return $win = true;

        } elseif ( $cible->_vie <= 0 ) {

            $this->_niveau++;
            echo "$cible->_nom à perdu ! $this->_nom à gagner et prend donc 1 niveau !<br><br>";
            return $win = true;

        } elseif  ( $this->_force <= 0 ) {

            $cible->_niveau++;
            $this->_force = 0;
            echo "$this->_nom à perdu par forfait car il n'a plus de force pour attaquer ! $cible->_nom à gagner et prend donc 1 niveau !<br><br>";
            return $win = true;

        } elseif ( $cible->_force <= 0 ) {

            $this->_niveau++;
            $cible->_force = 0;
            echo "$cible->_nom à perdu par forfait car il n'a plus de force pour attaquer ! $this->_nom à gagner et prend donc 1 niveau !<br><br>";
            return $win = true;

        } else {
            $cible->_vie -= $this->_atk;
            $this->_force -= $cible->_def;
        }


    }

    public function combat($joueur1, $joueur2)
    {
        echo "Début du combat :<br>";
        $joueur1->description();
        $joueur2->description();
        $i = 0;
        $win = false;

        while ( !$win ) 
        {

            if ( !$win ) {
                $i++;
                echo "<br> Round $i ($joueur1->_nom attaque $joueur2->_nom) :<br>";
                $win = $joueur1->attaque($joueur2);
                $joueur1->description();
                $joueur2->description();
            }

            if ( !$win ) {
                $i++;
                echo "<br> Round $i ($joueur2->_nom attaque $joueur1->_nom) :<br>";
                $win = $joueur2->attaque($joueur1);
                $joueur1->description();
                $joueur2->description();
            }


        }
    }


}




