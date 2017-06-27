function Afficher_erreur_connexion(){
    var a = document.forms["form_connexion"]["Nom_utilisateur"].value;
    var b = document.forms["form_connexion"]["Mot_de_passe"].value;
    var erreur_username="";
    var erreur_password="";

    if(a==""){
        erreur_username="Veuillez entrer votre nom d'utilisateur";
    }

    if(b==""){
        erreur_password="Veuillez entrer votre mot de passe";
    }

    if(a==""||b==""){
        alert(erreur_username + '\n' + erreur_password);
        return false;
    }
}
