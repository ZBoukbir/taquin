<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Page principale du jeu 'Taquin' de Hugo, Ziad et Ilona">
    <link rel="stylesheet" href="style/commun.css">
    <link rel="stylesheet" href="style/index.css">
    <title>Taquin</title>
  </head>

  <body>
    <div id="contener1">
        <div id="titre">Taquin</div>
    </div>

    <div id="contener2">
        <div id="contexte" class='contour'>
            <p> Ce jeu Taquin a été réalisé par Hugo, Ziad et Ilona, trois elèves ingénieurs deuxième année à l'Ecole Nationale des Sciences Géographiques.</p>
            ___________________________________________
            <p> bla bla bla  
            ___________________________________________
            <p><strong> Consignes et déroulement du jeu </strong></p>              
        </div>

        <div id="connexion" class='contour'> 
            <form id="pseudo" method="get" action="jeu.php">
                <input type="text" name="login" required minlength="1" maxlength="20" size="20" placeholder="Rentrez un pseudo">
                <input type="submit" value="C'est parti !">
            </form>
        </div>

        <div id="score" class='contour'>
            <div id="titreScore">Hall Of Fame</div>
            <?php include("connexion.php"); ?>
        </div>
    </div>

    <footer>
        <a href="html/planDuSite.html" target="_blank"> Plan du Site</a>
        -
        <a href="html/mentionsLegales.html" target="_blank"> Mentions légales </a>
        -
        <a href="html/credits.html" target="_blank"> Crédits </a>
    </footer>

  </body>
</html>