<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title> Bloqueur de Pub </title>
    <link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>
    <!-- En tête -->
    <header>
        <h1 id="titre_page"> Bloqueur de Pub </h1>
    </header>

    <!-- Menu de navigation -->
    <nav>
        <menu id="menu">
            <li class="lien_menu"> <a class="affichage_lien_menu" href="index.html">Accueil</a> </li>
        </menu>
    </nav>

    <div id="corps" class=pc>

        <!-- menu de navigation latéral -->
        <aside>
            <nav>
                <menu id="menu_lat" class="portable">
                    <li class="lien_menu_lat"> <a class="affichage_lien_menu_lat" href="guides/ad-blocker.html">Bloquer
                            les
                            publicités</a> </li>
                </menu>
            </nav>
        </aside>

        <!-- corps de la page -->
        <section class="portable">
            <center>
            <h3> 
                <?php
                
                if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
                echo 'Vous êtes sur Internet explorer, Ce tuto est conçu uniquement pour Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
                    echo 'Vous êtes sur Internet explorer, Ce tuto est conçu uniquement pour Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
                echo 'Vous êtes sur Mozilla Firefox, Ce tuto est conçu uniquement pour Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
                echo 'Vous êtes sur Google Chrome';
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
                echo "Vous êtes sur Opera Mini, Ce tuto est conçu uniquement pour Chrome";
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
                echo "Vous êtes sur Opera, Ce tuto est conçu uniquement pour Chrome";
                elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
                echo "Vous êtes sur Safari, Ce tuto est conçu uniquement pour Chrome";
                else
                echo 'Vous êtes sur Something else';
                ?>
                
            </h3> </center>
            <p>
                Paragraphe à remplir pour les bloqueurs de pub
            </p>

            


            
        </section>


    </div>
    <!-- fin div corps (agencement horizontal) -->

    <!-- bas de la page -->
    <footer>
        <p>
            Site par Lilian.
        </p>
    </footer>
</body>

</html>