<?php
    include("connexion.php");
    $tableau_classement = [];
    $requete = "SELECT id, nom FROM jeu";
    if ($result = mysqli_query($link, $requete)) {
        while ($ligne = mysqli_fetch_assoc($result)) {
            array_push($tableau_classement, [
                "id" => $ligne['id'],
                "nom" => $ligne['nom']
            ]);
        }

        $table_str = "<table>";
        $ligne = "";
        $position = 1;

        foreach ($tableau_classement as $elem) {
            $table_str .= "<tr><td>".$position;
            $table_str .= "e ";
            foreach ($elem as $key => $value) {
                $ligne .= $value;
                $ligne .= "  ";
            }
            
            $table_str .= $ligne;
            $table_str .= "</td></tr>";
            $position ++; 
            $ligne = "";
        }
        $table_str .= "</table>";
        echo $table_str;
    }
    else {
        echo "Erreur de requête de base de données.";
    }
?>