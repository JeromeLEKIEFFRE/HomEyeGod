<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style.css" />
</head>
        <header>

            <h1><a href="gestioncompte.php"><img src="../Bank/logo_HomiCare.png" height="70%"  alt="../Images/logo_HEC.png" /></a></h1>
            <div id="bouton_bandeau">
            <?php if ($_SESSION['Roles']==2 || $_SESSION['Roles']==3) { ?>
                <a href="page_admin.php"><input  type=<?="button"?> value=Admin </a> </input>


<?php }?>
<script type="text/javascript" src="../JS/admin_bouton.js"> show_admin_button("<?php $_SESSION["Roles"] ?>");</script>
<a href="../../Controleur/deconexion.php"><input  type="button" value="deconnexion" id="boutton_deco"/>
    </div>
    </header>
    <nav>
        <ul id="navigation">
            <li><a href="gestioncompte.php">Mon Compte</a></li>
            <li><a href="Gestion_Maison.php">Ma maison</a></li>
            <li><a href="FAQ.php">Aide</a></li>
        </ul>
    </nav>

