<?php


class Pokemon {
    private $nom;
    private $puissanceAttaque;
    private $type;
    private $pointsDeVie;

 // GETTERS
 public function getNom() {
    return $this->nom;
}

public function getPuissanceAttaque() {
    return $this->puissanceAttaque;
}

public function getType() {
    return $this->type;
}

public function getPointsDeVie() {
    return $this->pointsDeVie;
}

// SETTERS
public function setNom($nom) {
    $this->nom = $nom;
}

public function setPuissanceAttaque($puissanceAttaque) {
    $this->puissanceAttaque = $puissanceAttaque;
}

public function setType($type) {
    $this->type = $type;
}

public function setPointsDeVie($pointsDeVie) {
    $this->pointsDeVie = $pointsDeVie;
}

///__construct----------------------------------------
    public function __construct($nom, $puissanceAttaque, $type, $pointsDeVie) {
        $this->nom = $nom;
        $this->puissanceAttaque = $puissanceAttaque;
        $this->type = $type;
        $this->pointsDeVie = $pointsDeVie;
    }

// Fonction pour afficher les informations du Pokémon

public function pokedex() {
    echo "=== Pokedex ===<br>";
    echo "Nom :". $this->nom ."<br>";
    echo "Type :" . $this->type ."<br>";
    echo "Puissance d'Attaque : ".$this->puissanceAttaque ."<br>";
    echo "Points de Vie : ".$this->pointsDeVie."<br>";
    echo "================<br>";
}


// Frapper une cible
public function attaque($cible) {
   

    echo"" . $this->nom. " attaque " . $cible->getNom() .  "et inflige"  . $this->puissanceAttaque . " points de dégâts !<br>";
    $cible->recevoirDegats($this->puissanceAttaque);
}
 // Recevoir des dégâts
 public function recevoirDegats($degats) {
    $this->pointsDeVie -= $degats;

    if ($this->pointsDeVie <= 0) {
        $this->pointsDeVie = 0;
        echo "" .$this->nom ." a été mis K.O. !<br>";
    } else {
        echo " " . $this->nom ." a maintenant " .$this->pointsDeVie. " points de vie.<br>";
    }
}
    //une arene de combattre
    public function arene($adversaire){

        echo"" . $this->nom. " entre dans l'arène pour  combattre " . $adversaire->getNom() . "<br>";
        // combat 
            while ($this->pointsDeVie > 0 && $adversaire->getPointsDeVie() > 0) {
                        // Attaque du premier Pokémon

                echo"" . $this->nom. " attaque " . $adversaire->getNom() .  " et inflige  "  . $this->puissanceAttaque . " points de dégâts !<br>";
                        $adversaire->recevoirDegats($this->puissanceAttaque);
                            if ($this->pointsDeVie <= 0) {
                                $this->pointsDeVie = 0;
                                echo "" . $adversaire->getNom() ." a été mis K.O. !<br>"  . $this->nom. " remporte le combat !<br>";
                                break;

                            }
                            // Contre-attaque de l'adversaire

                echo "" . $adversaire->getNom() ." attaque " . $this->nom. " et inflige "  . $adversaire->getNom() . " points de dégâts !<br>";
                    $this->recevoirDegats($adversaire->getPuissanceAttaque());
                        if ($this->pointsDeVie <= 0) {
                            echo "" . $this->nom  . " a été mis K.O. !<br>"  .  $adversaire->getNom(). " remporte le combat !<br>";
                            break;
                        }

        }

    }
}





// public function get($nom)
//     {
//         return $this->nom;
//     }

//     public function set($nom)
//     {
//         $this->nom;
//     }


//     public function get($puissanceAttaque)
//     {
//         return $this->puissanceAttaque;
//     }

//     public function set($puissanceAttaque)
//     {
//         $this->puissanceAttaque;
//     }

//     public function get($type)
//     {
//         return $this->type;
//     }

//     public function set($type)
//     {
//         $this->type;
//     }

//     public function get($PointVie)
//     {
//         return $this->PointVie;
//     }

//     public function set($PointVie)
//     {
//         $this->PointVie ;
//     }

// Fonction pour afficher les informations du Pokémon