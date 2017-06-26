function Afficher_erreur(){
    var a = document.forms["form_inscription"]["nom"].value;
    var b = document.forms["form_inscription"]["prenom"].value;
    var c = document.forms["form_inscription"]["sexe"].value;
    var d = document.forms["form_inscription"]["username"].value;
    var e = document.forms["form_inscription"]["mdp"].value;
    var f = document.forms["form_inscription"]["confirm_mdp"].value;
    var g = document.forms["form_inscription"]["numero_voie"].value;
    var h = document.forms["form_inscription"]["voie"].value;
    var i = document.forms["form_inscription"]["code_postal"].value;
    var j = document.forms["form_inscription"]["ville"].value;
    var k = document.forms["form_inscription"]["email"].value;
    var l = document.forms["form_inscription"]["numero_tel"].value;
    var m = document.forms["form_inscription"]["numero_tel_fixe"].value;
    var erreur_nom="";
    var erreur_prenom="";
    var erreur_sexe="";
    var erreur_username="";
    var erreur_mdp="";
    var erreur_confirm_mdp="";
    var erreur_noconfirm="";
    var erreur_numero_voie="";
    var erreur_voie="";
    var erreur_code_postal="";
    var erreur_ville="";
    var erreur_email="";
    var erreur_numero_tel="";
    var erreur_numero_tel_fixe="";

    if (a == ""){
        erreur_nom="Veuillez entrer un nom";
    }
    if (b == ""){
        erreur_prenom="Veuillez entrer un prénom";
    }
    if (c ==""){
        erreur_sexe="Veuillez sélectionner un sexe";
    }
    if (d ==""){
        erreur_username="Veuillez entrer un nom d'utilisateur";
    }
    if (e ==""){
        erreur_mdp="Veuillez entrer un mot de passe";
    }

    else {
        if (f == "") {
            erreur_confirm_mdp = "Veuillez confirmer votre mot de passe";
        }
        else {
            if (e != f) {
                erreur_noconfirm = "Vous n'avez pas rentré le même mot de passe";
            }
        }
    }

    if (g ==""){
        erreur_numero_voie="Veuillez entrer un numéro de voie";
    }
    if (h ==""){
        erreur_voie="Veuillez entrer une voie";
    }
    if (i ==""){
        erreur_code_postal="Veuillez entrer un code postal";
    }
    if (j ==""){
        erreur_ville="Veuillez entrer une ville";
    }
    if (k ==""){
        erreur_email="Veuillez entrer une adresse mail";
    }
    if (l ==""){
        erreur_numero_tel="Veuillez entrer un numéro de téléphone portable";
    }
    if (m ==""){
        erreur_numero_tel_fixe="Veuillez entrer un numéro de téléphone fixe";
    }

    if (a==""||b==""||c==""||d==""||e==""||f==""||e!=f||g==""||h==""||i==""||j==""||k==""||l==""||m==""){
        alert(erreur_nom + '\n' + erreur_prenom + '\n' + erreur_sexe + '\n' + erreur_username + '\n' + erreur_mdp
            + '\n' + erreur_confirm_mdp + '\n' + erreur_noconfirm + '\n' + erreur_numero_voie + '\n' + erreur_voie + '\n' + erreur_code_postal
            + '\n' + erreur_ville + '\n' + erreur_email + '\n' + erreur_numero_tel + '\n' + erreur_numero_tel_fixe);
        return false;

    }
}
