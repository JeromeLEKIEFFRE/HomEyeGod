<?php
session_start();
include ("../Modele/connexion_db.php");
include("../Modele/request_session_Accueil.php");

if (connexion_check_password($db, $_POST["Nom_utilisateur"])["Mdp"]==$_POST["Mot_de_passe"]){
    $_SESSION['idUtilisateur']=connexion_check_password($db,$_POST["Nom_utilisateur"])["idUtilisateur"];
    $_SESSION['Roles']=connexion_check_password($db,$_POST["Nom_utilisateur"])["Roles"];
    $_SESSION['NomUtilisateur']=$_POST["Nom_utilisateur"];
     if($_SESSION['Roles']==1){
         header('Location: ../Vue/Pages/Gestion_Maison.php');
     }
     if($_SESSION['Roles']==2){
         header('Location: ../Vue/Pages/page_admin.php');
         exist();
     }
     if($_SESSION['Roles']==3){
        header('Location: ../Vue/Pages/page_admin.php');
        exist();
    }
}
else{
    echo "Mots de passe incorecte ou de correspond pas au nom d'utilisateur indiqué";
}

