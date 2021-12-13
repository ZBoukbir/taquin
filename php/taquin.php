<?php
    $results = [];
    include("connexion.php");
    if (isset($_GET['id'])) {
        $requete = "SELECT * FROM objet WHERE id = {$_GET['id']} ORDER BY RAND() LIMIT 5";
        if ($result = mysqli_query($link, $requete)) {
            while ($ligne = mysqli_fetch_assoc($result)) {
                $results = Attribute($results, $ligne);
            }
        } else {
            echo "Erreur de requête de base de données.";
        }
        foreach ($results as $result) {
            echo json_encode($result);
        }
    }
?>