<?php
    require ('../Modele/connexion_db.php');
    require ('../Modele/DonneeCapt.php');
    $idMaison=1;
    $pieces=listsalles($db,$idMaison);
    $capteurs=listetypescapteurs($db,1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Gestion de ma maison</title>
</head>

<body>
    <header>
        <h1>
            <a href="home_page.html"><img src="../Vue/Bank/logo-accueilDiv2.png" height="15%" width="15%" alt="retour vers l'accueil" /></a>
        </h1>
    </header>
    <nav>
        <ul id="navigation">
                <li><a href="home_page.html">Accueil </a></li>
                <li><a href="boutique.html">Boutique</a></li>
                <li><a href="aide.html">Aide</a></li>
                <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

    <div class="gestion_capt">

        <div class="showpiece">
            <p>Pièces</p>
            <!-- récupérer les noms de pièces dans la BD puis ouvrir en js un div correspondant aux données -->
            <ul class="listepiece">
                <?php
                foreach($pieces as $row){?>
                    <li value=<?= $row['idPiece']?> id=><?=$row['Nom']?></li>
                <?php
                }
                ?>




            </ul>
            <div class="ajout_piece">
                <p>+ Ajouter une pièce</p>
            </div>
        </div>

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
        <!-- récupérer les noms de capteurs dans la BD puis ouvrir en js un div correspondant aux données -->
        <div class="showcapt">
            <p>Capteurs</p>
            <ul class="listecapt">
                <?php
                foreach($capteurs as $row){?>
                    <li value=<?= $row['TypeValue']?>><?=$row['TypeName']?></li>
                    <?php
                }
                ?>
            </ul>
            <div class="ajout_capt">
                <p>+ Ajouter un capteur</p>
            </div>
        </div>
    </div>
</body>
</html>