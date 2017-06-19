<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Page Administrateur</title>
</head>

<body>
<header>
    <h1>
        <a href="home_page.html"><img src="../BANK/logo-accueilDiv2.png" height="15%" width="15%" alt="retour vers l'accueil" /></a>
    </h1>
</header>
<nav>
    <ul id="navigation">
        <li><a href="home_page.html">Accueil </a></li>
        <li><a href="mon_compte.html">Mon Compte</a></li>
        <li><a href="ma_maison.html">Ma maison</a></li>
        <li><a href="boutique.html">Boutique</a></li>
        <li><a href="qui_sommes_nous.html">Qui sommes nous?</a></li>
        <li><a href="aide_contact.html">Aide/Contact</a></li>
        <li><a href="admin.html">Administrateur</a></li>
    </ul>
</nav>

<section class="rectangle_flex_encadre">
    <section class="rectangle_flex_acc">
        <div class="modif_admin" onclick="modifLongueur('modif')">
            <p class="modif_admin">Modifier le site</p>
        </div>
        <div class ="consult_admin" onclick="modifLongueur('consult')">
            <p class="consult_admin">Consultation</p>
        </div>
    </section>

    <section class="rectangle_flex_modif">
        <div class="list_page">
            <ul>
                <li name="ui">ui
                    <ul>
                        <li>ko</li>
                        <li>jo</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="page_code">
            <form class="store_text">
               <textarea id="html_code">
                   <input type="submit">
                </textarea>

            </form>

        </div>
    </section>

    <section class="rectangle_flex_consult">
        <div class="print_users">
            <?php
            include("recup.php");
            echo recup_name();
            ?>

        </div>
    </section>
</section>


<script type="text/javascript" src="accueil_admin.js"></script>
</body>
</html>