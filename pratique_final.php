<?php

$membres = ["Maxime"];
$membres[] = "Alice";
$membres[] = "Bob";

$CodeSecret = "tyrolium2026";

function verifierAcces($prenom, $motdepasse)

{
    if ($prenom == "Maxime" && $motdepasse == "tyrolium2026") {
        echo "Accès Utilisateur autorisé pour Maxime.";
    } else {
        echo "Accès refusé pour $prenom.";  
    }

    for ($i = 0; $i <= 2; $i++) {
    echo "La valeur de i est : $i\n";
}

}