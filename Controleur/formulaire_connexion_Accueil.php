<?php
session_start();
include ("../Modele/connexion_db.php");
include("../Modele/request_session_Accueil.php");

if (connexion_check_password($db, $_POST["Nom_utilisateur"])["Mdp"]==$_POST["Mot_de_passe"]){
    $_SESSION['idUtilisateur']=connexion_check_password($db,$_POST["Nom_utilisateur"])["idUtilisateur"];
    $_SESSION['Roles']=connexion_check_password($db,$_POST["Nom_utilisateur"])["Roles"];
     if($_SESSION['Roles']==1){
         header('');
     }
}
else{
    echo "Mots de passe incorecte ou de correspond pas au nom d'utilisateur indiqué";
}

