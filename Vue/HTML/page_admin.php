<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../CSS/style_admin.css" />
    <title>Page Administrateur</title>
</head>

<body>
    <?php
    include("../../Modele/recup.php");
    include("../../Modele/connexion.php");
    ?>
<header>
    <h1>
        <a href="home_page.html"><img src="../Bank/logo-accueilDiv2_admin.png" height="15%" width="15%" alt="retour vers l'accueil" /></a>
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
                <!--<?php //echo recup_page_name($db)?>-->
            <?php
            foreach(recup_page($db) as $row){?>
                <li> <?php echo $row['name_page']?>  </li>
                <ul>
                    <?php foreach (recup_sous_page($db,$row['name_page'])as $under_row){ ?>
                    <li id="<?php echo $under_row['name_text'] ?>" onclick = "fill_text_area(this.id)"> <?php echo $under_row['name_text']?> </li>
                    <?php }?>
                </ul>
            <?php }?>
            </ul>
        </div>

        <div class="page_code">
                <textarea id="html_code" name="html_code">

                </textarea>
                <input id = "admin_modif_submit" type="submit" value="Modifier" onclick="modif_text_admin(get_p_name(),get_html_code())">
                <input id="p_name" type="hidden" name="p_name" value="">


        </div>
    </section>

    <section class="rectangle_flex_consult">
        <div class="print_users">
            <ul class="print_users" name="list">
                <?php echo recup_name($db)?>
            </ul>
        </div>
        <div class="print_users" name="list2">
            <ul class="print_users">
                <?php echo recup_all_broken_capt($db)?>
            </ul>
        </div>

    </section>
</section>


<script type="text/javascript" src="accueil_admin.js"></script>
</body>
</html>