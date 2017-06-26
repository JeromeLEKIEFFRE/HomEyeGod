<?php
    session_start();
    require ('../../Modele/connexion_db.php');
    require ('../../Modele/DonneeCapt.php');
    $idMaison=1;
    $pieces=listsalles($db,$idMaison);
    $capteurs=listetypescapteurs($db,1);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Gestion de ma maison</title>
    <link rel="stylesheet" href="../CSS/styleGestionMaison.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../JS/Gestion_Maison.js"></script>
</head>

<body>
    <header>
        <h1>
            <script>show_admin_button(<?php$_SESSION['Role']?>)</script>
            <h1><a href="home_page.html"><img src="../" height="15%" width="15%" alt="logo HomEyeGod" /></a></h1>
            <a href="page_admin.php"><input type="button" value="Admin" id="pop_up_admin">
        </h1>
    </header>
    <nav>
        <ul id="navigation">
            <li><a href="gestioncompte.php">Mon Compte</a></li>
            <li><a href="Gestion_Maison.php">Ma maison</a></li>
            <li><a href="aide.html">Aide</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

    <div class="gestion_capt">
        <div class="showpiece">
            <p>Pièces</p>
            <ul class="listepiece">
                <?php
                foreach($pieces as $row){?>
                    <li value="<?= $row['TypeValue']?>" ><?=$row['Nom']?></li>
                <?php
                }
                ?>
            </ul>
            <div class="ajout_piece">
                <p>+ Ajouter une pièce</p>
            </div>
        </div>

        <div class="showcenter">
            <div class="showgeneral">
                <h3>Informations capteurs général </h3>
                <p>Température moyenne :</p>
                <p>Humidité moyenne : XXX% <!--variable à mettre--></p>
                <p>Fenêtres ouvertes : X <!--variable à mettre--></p>
                <p>Chauffages allumés : X <!--variable à mettre--></p>
                <p>Alarme allumé : Oui <!--Oui ou non--></p>
                <h3>Alertes et pannes</h3>
                <p>Capteurs en panne : X</p>
                <p>Actionneurs en panne : X</p>
                <h3>Programmations</h3>
                <p>Thermostat X° , commence à XXhXX</p>
                <p>Chambre de Jimmy, Fenêtre 1, ouverture à XXhXX</p>
                <p>+ Ajouter une programmation</p>
            </div>

            <div id="showdatas">
                <?php
                foreach($pieces as $row){?>
                <div class="piece">
                    <H2><?=$row['Nom']?></H2>
                    <?php foreach(capteurs($db,$row['idPiece']) as $row2){?>
                    <div class="doncapt">
                        <h3><?=$row2['TypeName']?></h3>
                        <h4><?=$row2['idCapteur']?></h4>
                        <h5><?=$row2['Datas']?></h5>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>

        </div>
        <div class="showcapt">
            <p>Capteurs</p>
            <ul class="listecapt">
                <?php
                foreach($capteurs as $row){?>
                    <li value=<?= $row['TypeValue']?>><?=$row['TypeName']?></li>
                    <?php } ?>
            </ul>
            <div class="ajout_capt">
                <p>+ Ajouter un capteur</p>
            </div>
        </div>
    </div>

</body>
</html>
