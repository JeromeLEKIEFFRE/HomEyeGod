<?php
include('../Modele/connexion.php');
include('../Modele/recup.php');

$selected_user = $_GET["text"];

$r = recup_user_info($db,$selected_user);

echo $r[0];
echo $r[1];