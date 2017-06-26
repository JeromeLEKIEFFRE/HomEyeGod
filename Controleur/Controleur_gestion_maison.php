<?php
require ("../Modele/DonneeCapt.php");
require("../Vue/Pages/Gestion_Maison.php");
require ('../Modele/connexion_db.php');
function import(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab = str_split($data,19);
    $trame = $data_tab[1];
    list($t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec) =sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    //$donn=$db->query('SELECT Datas FROM donnees WHERE idCapteur="'.$n.'"');
    //$donnf=$donn->fetch;
    $DATE=$year+$month+$day+$hour+$min+$sec;
    $sql='INSERT "'.$a.'","'.$n.'","'.$DATE.'","'.$v.'" INTO donnees';
    $db->exec($sql);
    return ;
}





    /*
    ?>
    <div id="1">
    <h3>Information capteurs</h3>

    </div>


onclick="cachershowgeneral();document.getElementById('showdatas').innerHTML=document.getElementById('sg').innerHTML;affichersg()"




<input id="sg" type="hidden" value="<h3>Information capteurs</h3>
        <?php
$datas=typescapteurs($db,$_GET['pid']);
foreach($datas as $row){?>
            <li id=<?= $row['']?>><?=$row['Nom']?></li>
            <?php
}
?>">*/