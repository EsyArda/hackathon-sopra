<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenNet</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"/>
    <script src="../scripts/jquery-1.2.min.js"></script>
</head>

<body>
    <!-- En tête -->
    <header>
        <!-- <h1 id="titre_page">ZenNet</h1> -->
        <img class="logo-simple" src="../img/logo-simple.png" alt="Logo : trois pierres empilées">
    </header>

    <!-- Menu de navigation -->
    <nav>
        <menu id="menu">
            <li class="lien_menu"> <a class="affichage_lien_menu" href="../index.html">Accueil</a> </li>
        </menu>
    </nav>

    <div id="corps" class=pc>

        <!--Navigation bar-->
        <div id="nav-placeholder">

        </div>

        <script>
            $(function () {
                $("#nav-placeholder").load("./nav.html");
            });
        </script>
        <!--end of Navigation bar-->

        <!-- corps de la page -->
        <section class="portable">
            <h2>Comment bloquer les publicités sur votre navigateur en 10 étapes</h3>
            <h3> 
                <?php
                
                if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
                echo 'Vous êtes sur Internet explorer, Ce tuto est conçu uniquement pour Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
                    echo 'Vous êtes sur Internet explorer, Ce tuto est conçu uniquement pour Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
                echo 'Vous êtes sur Mozilla Firefox, Ce tuto est conçu uniquement pour Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
                echo 'Ce guide est spécifique a votre navigateur : Google Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
                echo "Vous êtes sur Opera Mini, Ce tuto est conçu uniquement pour Chrome";
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
                echo "Vous êtes sur Opera, Ce tuto est conçu uniquement pour Chrome";
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
                echo "Vous êtes sur Safari, Ce tuto est conçu uniquement pour Chrome";
                else
                echo 'Vous êtes sur Something else';
                ?>
                
            </h3>
            <olc class="ol-tuto">
                <li>Cliquez sur Chrome Web store en dessous de votre barre de recherche Google ou cliquez sur <a href="https://chrome.google.com/webstore/category/extensions?hl=fr">ce lien</a>.</li>
                <img src="../img/Tuto adblock 1.gif" alt="Page Google">
                <li>Cliquez sur extension</li>
                <img src="../img/Tuto adblock 2.gif" alt="Chrome web store">
                <li>Tapez adblock dans l’onglet recherche puis cliquez sur la touche entrée sur votre clavier </li>
                <img src="../img/Tuto adblock 3.gif" alt="Chrome web store">
                <li>Cliquez sur AdBlock le meilleur bloqueur de pubs proposé par : getadblock.com</li>
                <img src="../img/Tuto adblock 4.gif" alt="Résultats recherche adblock">
                <li>Cliquez sur ajouter à chrome</li>
                <img src="../img/Tuto adblock 5.gif" alt="Page adblock">
                <li>Cliquez sur ajouter l’extension</li>
                <img src="../img/Tuto adblock 6.2.gif" alt="Popup ajouter extension">
                <li>Vous allez être redirigé sur le page de getadblock.com ne vous inquiétez pas le téléchargement à bien été réalisé. Vous pouvez désormais quitter cette page et passer à l’étape suivante</li>
                <img src="../img/Tuto adblock 7.gif" alt="Onglet dons">
                <li>Cliquez sur l’icône puzzle en haut à droite. Cette icône indique les extension que vous avez sur votre navigateur web</li>
                <img src="../img/Tuto adblock 8.gif" alt="Page d'extensions">
                <li>Cliquez sur AdBlock le meilleur bloqueur de pubs</li>
                <img src="../img/Tuto adblock 9.gif" alt="Popup activer adblock">
                <li>Vous avez le choix de l’activer sur tout les site ou pour un site spécifique</li>
                <img src="../img/Tuto adblock 10.gif" alt="Chrome web store">
                <li>L’icône en forme de pouce vert  indique que votre bloqueur de pub à bien été activé</li>
                <img src="../img/Tuto adblock validé.gif" alt="Popup adblock activé">
            </ol>
        </section>


    </div>
    <!-- fin div corps (agencement horizontal) -->

    <!-- bas de la page -->
    <div id="footer-placeholder">

    </div>

    <script>
        $(function () {
            $("#footer-placeholder").load("../footer.html");
        });
    </script>
    <!-- Fin bas de page-->
</body>

</html>