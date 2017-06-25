
function modifLongueur(page) {
    var x = document.getElementsByClassName("consult_admin");
    var m = document.getElementsByClassName("modif_admin");
    var c = document.getElementsByClassName("rectangle_flex_acc");

    for (var i = 0; i < x.length; i++) {
        x[i].style.display="none";

    }
    for (var j = 0; j < m.length; j++) {
        m[j].style.display="none";
    }
    for (var k = 0; k < c.length; k++) {
        c[k].style.display="none";
    }

    if (page === 'modif'){
        var n = document.getElementsByClassName("rectangle_flex_modif");
        for(var l = 0;l<n.length;l++){
            n[l].style.display = "flex";
        }
    }

    if (page === 'consult'){
        var z = document.getElementsByClassName("rectangle_flex_consult");
        for(var o = 0;o<z.length;o++){
            z[o].style.display = "flex";
        }
    }


}

function fill_text_area(str) {
    if (str == "") {
        document.getElementById("html_code").value = "";
        return;
    }
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject)
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }

        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("html_code").value = xmlhttp.responseText;
                document.getElementById("p_name").value = str;
                console.log(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", "../../Modele/fill_text.php?text=" + str, true);
        xmlhttp.send();
    }


function get_name(id){
    return document.getElementById("html_code").name
}
// fonction pour ajouter un écouteur à t
/*function load() {
    var el = document.getElementsByClassName("modif_admin");
    el.addEventListener("click", modifieTexte, false);
}*/

/*function myFunction() {
    var x = document.getElementsByClassName("");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "red";
    }
}*/