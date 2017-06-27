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
</head>

<body>
    <?php include"bandeau.php"?>
    <div class="gestion_capt">
        <div class="showpiece">
            <p>Pièces</p>
            <ul class="listepiece">
                <?php
                foreach($pieces as $row){?>
                    <li><?=$row['Nom']?></li>
                    <?php } ?>
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
                                <h3><?=$row2['TypeName']?> : </h3>
                                <h4><?=$row2['Datas']?></h4>
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