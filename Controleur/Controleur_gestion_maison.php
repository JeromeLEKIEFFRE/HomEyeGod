<?php
require("Gestion_Maison.js");
require ("DonneeCapt.php");
require("Gestion_Maison.php")
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
?>">