<?php
include ("../Modele/connexion_db.php");

if ($_POST["username"] != NULL)
    $username=$_POST["username"];

if ($_POST["password"] != NULL)
    $password=$_POST["password"]