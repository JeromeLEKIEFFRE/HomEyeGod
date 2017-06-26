<?php
// Contrôleur pour le formulaire inscription
include ("../Modele/Verification.php");
include ("../Modele/connexion_db.php");
include ("../Modele/Insertion_BDD.php");

//email="test@exemple.com";
//affectation des données du formulaires en variables php
if ($_POST != NULL)
$nom = $_POST["nom"];
else
    echo "erreur nom";

if ($_POST["prenom"] != NULL)
$prenom=         $_POST["prenom"];
else
    echo "erreur prenom";

if ($_POST["sexe"] != NULL)
$sexe= $_POST["sexe"];
else
    echo "erreur sexe"

if ($_POST["username"]!=NULL)
$username=       $_POST["username"];
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


if ($_POST["adresse"]!=NULL)
$adresse=        $_POST["adresse"];
else
    echo"erreur";

if  ($_POST["code_postal"]!=NULL)
$code_postal=    $_POST["code_postal"];
else
    echo "erreur code postal";

if ($_POST["ville"]!=NULL)
$ville=          $_POST["ville"];

else
    echo"erreur ville";

if  ($_POST["email"]!=NULL)
$email=          $_POST["email"];
else
    echo"erreur mail vide";

if ($_POST["numero_tel"]!=NULL){
$numero_tel=     $_POST["numero_tel"];
$numero_tel_fixe=$_POST["numero_tel_fixe"];}
else
    echo"erreur tel";

if ($_POST["valider"] //vérification des champs
    AND $nom !=NULL
    AND $prenom !=NULL
    AND $username !=NULL
    AND idUtilisateur($db, $username)->rowcount() ==NULL //vérification présence dans la bdd
    AND $mdp !=NULL
    AND $confirm_mdp !=NULL
    AND (password_verify($confirm_mdp,$mdp)) //vérification même mdp
    AND $adresse!=NULL
    AND $code_postal !=NULL
    AND $ville !=NULL
    AND $email != NULL
    AND filter_var($email, FILTER_VALIDATE_EMAIL) //email valide?
    AND idMail($db, $email)->rowcount()==NULL //vérification présence du mail dans bdd
    AND $_POST["numero_tel"]!=NULL ){
    insertNewUser($db,$username,$mdp,$nom,$prenom,$numero_tel,$numero_tel_fixe,$email);
    echo (verify($db)['Nom']);
    //newIdUtilisateur($db);
    //newHome($db, idUtilisateur($db,$_POST["Nom_utilisateur"]),$_POST["Ville"], NULL, $_POST["Numero_de_telephone"], NULL, NULL, $_POST["Code_Postal"]);
    //insertNewUser($db, $_POST["Nom_utilisateur"], $_POST["Mot_de_passe"], NULL, NULL, NULL, $_POST["Numero_de_telephone"], NULL);
    //header('Location: ../HTML/compte_cree.html');
    exit;
}

?>
