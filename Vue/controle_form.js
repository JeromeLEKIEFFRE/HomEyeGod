
var you_shall_not_pass = function (event) {
    console.log(document.getElementsByName("req_type"));
    if(document.getElementsByName("nom")[0].value == "" && document.getElementsByName("req_type")[0].checked || document.getElementsByName("nom")[0].value == "" && document.getElementsByName("req_type")[2].checked ){  // Cas Nom pas précisé
        alert("Vous n'avez pas précisé de nom");
        event.preventDefault();
        return;
    }
    if(!document.querySelector('input[name="req_type"]:checked')){ // Si !Objet -> false, !Null -> true
        alert("Veuillez précisé une requête");
        event.preventDefault(); // empeche de lancer le submit
        return;
    }
    return;
};
document.getElementById("send_form").addEventListener("submit", you_shall_not_pass, false); // ON ajoute un écouteur lorsqu'on clique sur envoyer
