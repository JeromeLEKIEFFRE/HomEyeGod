<?php
$_SESSION["user"] = NULL;
session_destroy();
header("location: ../Vue/Pages/connexion_accueil.php");