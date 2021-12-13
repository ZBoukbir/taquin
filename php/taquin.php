<?php
    include("connexion.php");
    $options = [];
    $requete = "SELECT id, nom FROM jeu ORDER BY RAND() LIMIT 5";
    if ($result = mysqli_query($link, $requete)) {
        while ($ligne = mysqli_fetch_assoc($result)) {
            $options = Attribute($options, $ligne);
        }
    } 
    else {
        echo "Erreur de requête de base de données.";
    }

    foreach ($options as $result) {
        echo json_encode($result);
    }

    function Attribute($tab, $ligne) {
        array_push($tab, [
            "id" => intval($ligne['id']),
            "nom" => ($ligne['nom']),
        ]);
        return $tab;
    }
?>