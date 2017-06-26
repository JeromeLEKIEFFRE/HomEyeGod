$(function() {
    $('#listepiece').css('display', 'list-istem');
    $('#listepiece').click(function(event) {
        var actuel = event.target;
        if (!/li/i.test(actuel.nodeName) || actuel.className.indexOf('actif') > -1) {
            return;
        }
        $(actuel).addClass('actif').siblings().removeClass('actif');
        setDisplay();
    });
    function setDisplay() {
        var modeAffichage;
        $('#listepiece li').each(function(rang) {
            modeAffichage = $(this).hasClass('actif') ? '' : 'none';
            $('.doncapt').eq(rang).css('display', modeAffichage);
        });
    }
    setDisplay();
});




/*


function cachershowgeneral(){
    var x = document.getElementById('showgeneral');
    var y = document.getElementById('showdatas');
    x.style.display="flex";
    y.style.display="flex";
}

function blabla(str) {
    if(str==""){
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

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("showdatas").innerHTML = xmlhttp.responseText;
            document.getElementById("idpiece").value = str;
            console.log(xmlhttp.responseText);

            document.getElementById('showdatas').style.display='flex';

        }
    }
    xmlhttp.open("GET","Gestion_Maison.php?pid="+str,true);
    xmlhttp.send();
}

function affichersg(){
    document.getElementById('showdatas').style.display='flex';
    document.getElementById('showdatas')
}

*/
