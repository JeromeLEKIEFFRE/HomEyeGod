<?php
$_SESSION["user"] = NULL;
session_destroy();
header("location: ../Vue/Pages/new_accueil.php");
