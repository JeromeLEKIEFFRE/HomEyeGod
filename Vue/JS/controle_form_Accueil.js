
var you_shall_not_pass = function (event) {

    if(document.getElementsByName("nom")[0].value == ""){  // Cas Nom pas précisé

        alert("Vous n'avez pas précisé de nom");
        event.preventDefault();
        return;
    }
    if(!document.querySelector('input[name="sexe"]:checked')){ // Si !Objet -> false, !Null -> true
        alert("Vous n'avez pas de sexe");
        event.preventDefault(); // empeche de lancer le submit
        return;
    }
    return;
};
document.getElementById("form_inscription").addEventListener("submit", you_shall_not_pass, false); // ON ajoute un écouteur lorsqu'on clique sur envoyer
console.log(document.getElementsByName("nom")[0].value == "");