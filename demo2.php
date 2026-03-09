<?php
    
    $age = 20;
    $role = "admin";
    $motsdepasse = "motdepasse123";
?>
    
    if ($motsdepasse == "motdepasse123"){
        echo "Mot de passe correct. Accès autorisé.";
    } else {
        echo "Mot de passe incorrect. Accès refusé.";
    }