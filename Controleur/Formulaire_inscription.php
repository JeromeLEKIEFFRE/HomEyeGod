<?php
// Contrôleur pour le formulaire inscription
include("../Modele/Verification_Accueil.php");
include ("../Modele/connexion_db_1.php");
include("../Modele/Insertion_BDD_Accueil.php");

//affectation des données du formulaires en variables php
if ($_POST != NULL)
$nom = $_POST["nom"];
else
    echo "erreur nom";

if ($_POST["prenom"] != NULL)
$prenom=         $_POST["prenom"];
else
    echo "erreur prenom";

if ($_POST["sexe"] =="homme" || $_POST["sexe"]=="femme")
$sexe= $_POST["sexe"];
else
    echo "erreur sexe";

if ($_POST["username"]!= NULL)
$username= $_POST["username"];
else
    echo "erreur username";

if ($_POST["mdp"]!=NULL)
$mdp=password_hash("$_POST[mdp]",PASSWORD_BCRYPT);
else
    echo "erreur mdp vide";

if ($_POST["confirm_mdp"]!=NULL)
$confirm_mdp=$_POST["confirm_mdp"];
else
    echo "erreur confirm mdp";
if (!password_verify($confirm_mdp,$mdp))
    echo "erreur verif mdp";

if  ($_POST["code_postal"]!=NULL)
$code_postal=    $_POST["code_postal"];
else
    echo "erreur code postal";

if ($_POST["ville"]!=NULL)
$ville=          $_POST["ville"];
else
    echo"erreur ville";

if ($_POST["pays"]!=NULL)
    $pays=          $_POST["pays"];
else
    $pays="France";

if  ($_POST["email"]!=NULL)
$email=          $_POST["email"];
else
    echo"erreur mail vide";

if ($_POST["numero_tel"]!=NULL)
$numero_tel=$_POST["numero_tel"];
else
    echo"erreur tel";

if ($_POST["numero_tel_fixe"]!=NULL)
$numero_tel_fixe=$_POST["numero_tel_fixe"];
else
    echo"erreur tel fixe";


if ($_POST["type_voie"] !=NULL)
$type_voie_nom=$_POST["type_voie"];
else
    echo "erreur type voie";
$type_voie = typevoie($db,$type_voie_nom)['TypeValue'];

if ($_POST["voie"] !=NULL)
$voie=$_POST["voie"];
else
    echo "erreur voie";

if ($_POST["numero_voie"] !=NULL)
$numero_voie=$_POST["numero_voie"];
else
    echo "erreur numéro voie";

$idMaison=1;
$type_user=1;
$superficie=1;
$nombrepiece=1;
$nombrepersonne=1;

if ($_POST["valider"] //vérification des champs
    AND $nom !=NULL
    AND $prenom !=NULL
    AND $username !=NULL
    AND idUtilisateur($db, $username)->rowcount() ==NULL //vérification présence dans la bdd
    AND $mdp !=NULL
    AND $confirm_mdp !=NULL
    AND (password_verify($confirm_mdp,$mdp)) //vérification même mdp
    AND $code_postal !=NULL
    AND $ville !=NULL
    AND $email != NULL
    AND filter_var($email, FILTER_VALIDATE_EMAIL) //email valide?
    AND idMail($db, $email)->rowcount()==NULL //vérification présence du mail dans bdd
    AND $_POST["numero_tel"]!=NULL ){

    insertNewUser($db,$username,$mdp,$nom,$prenom,$idMaison,$numero_tel,$numero_tel_fixe,$email,$type_user);

    echo (verify($db)['Nom']);

    $idUtilisateur=idUtilisateur($db,$username);

    newHome($db,$idUtilisateur,$ville,$type_voie,$numero_voie,$voie,$pays,$code_postal,$superficie,$nombrepiece,$nombrepersonne);

    //header('Location: ../Pages/compte_cree.html');
    exit;
}

?>
