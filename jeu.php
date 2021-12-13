<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Taquin</title>
        <link rel="stylesheet" href="style/commun.css">
        <link rel="stylesheet" href="style/taquin.css">
    </head>

    <body>
    <?php
        include("php/connexion.php");
        $today = date("H:i:s"); 
        $sql = "INSERT INTO joueur (pseudo, finchrono, debutchrono) VALUES ('$_GET[login]', '$today', '$today')";
    ?>
   <input type="readonly" id="pseudo" name="login" value="<?php echo $_GET['login']; ?>" style="display:none"> 

    <div id="contener1">
        <div id="titre">Taquin</div>
    </div>

    <?php
        echo 
        "<div id=\"retourPP\" style=\"visibility:hidden;\">
          <form method=\"get\" action=\"pagePrincipale.php\">
            <input type=\"readonly\" name=\"login\" value=\"$_GET[login]\" style=\"display:none;\"> 
            <input type=\"submit\" value=\"Retour à la page principale\">
          </form>
        </div>"
    ?>

    <div id="contener2">
        <div id="fondMap">
            <div id="map"></div>
        </div>

        <div id="niveaux" class='titreSection'>
            Progression du jeu
        </div>

        <div id="finJeu">
            <form method="get" action="pageFin.php" id="fin">
              <input type="readonly" id="pseudo" name="login" value="<?php echo $_GET['login']; ?>" style="display:none"> 
              <button id="btnFin">Fin du jeu</button>
            </form>
        </div>
    </div>

    <footer id = "mentions">
        <a href="html/planDuSite.html" target="_blank"> Plan du Site</a>
        -
        <a href="html/mentionsLegales.html" target="_blank"> Mentions légales </a>
        -
        <a href="html/credits.html" target="_blank"> Crédits </a>
    </footer>

    <!-- <script src="carte.js"></script> -->
  	</body>
</html>