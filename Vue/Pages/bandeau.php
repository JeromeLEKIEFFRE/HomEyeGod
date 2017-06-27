<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style.css" />
</head>
    <body>
        <header>

            <h1><a href="home_page.html"><img src="../" height="15%" width="15%" alt="logo HomEyeGod" /></a></h1>
            <div>
            <?php if ($_SESSION['Roles']==2 || $_SESSION['Roles']==3) { ?>
    <input href="page_admin.php" type=<?="button"?> value=Admin> </input>

<?php }?>
<script> show_admin_button("<?php $_SESSION["Roles"] ?>");</script>
<a href="../../Controleur/deconexion.php"><input  type="button" value="deconexion" id="boutton_deco"/>
    </div>
    </header>
    <nav>
        <ul id="navigation">
            <li><a href="gestioncompte.php">Mon Compte</a></li>
            <li><a href="Gestion_Maison.php">Ma maison</a></li>
            <li><a href="aide.html">Aide</a></li>
        </ul>
    </nav>
