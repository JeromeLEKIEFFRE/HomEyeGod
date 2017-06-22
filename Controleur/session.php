<?php
session_start();
$_SESSION['Roles'] = $_POST['role'];
$_SESSION['Nom'] = $_POST['nom'];
$_SESSION['Prenom'] = $_POST['prenom'];
$_SESSION['idAdressePrincipale'] = $_POST['idadresseprincipale'];
$_SESSION['Mail'] = $_POST['mail'];
$_SESSION['NomUtilisateur'] = $_POST['nomutilisateur'];