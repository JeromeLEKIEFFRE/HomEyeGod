

<?php
session_start();
$dbname = 'homeyegod';
$host='localhost';
$user='root';
$password='root';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$password");
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
include("../../Modele/fonction_gestion_compte.php");

?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Créer un compte</title>
</head>
    <body>
        <header>
            <script>show_admin_button(<?php$_SESSION['Role']?>)</script>
            <h1><a href="home_page.html"><img src="../" height="15%" width="15%" alt="logo HomEyeGod" /></a></h1>
            <input type="button" value="Admin" id="pop_up_admin">

        </header>
        <nav>
            <ul id="navigation">
                <li><a href="gestioncompte.php">Mon Compte</a></li>
                <li><a href="Gestion_Maison.php">Ma maison</a></li>
                <li><a href="aide.html">Aide</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <section>
        	<h1>Données personnelles</h1>
            <div class="gestion_c">
            <aside>
        		<p>Sexe <br/>
        		Nom:<br/>
        		Prénom:  <br/>
        		Nom d'utilisateur:<br/>
        		Code postal:<br/>
        		Ville:<br/>
        		adresse:<br/>
        		email:<br/>
        		Numéro de téléphone:<br/>
                Numéro de téléphone Fixe:    </p>
            </aside>
        	<aside>
                <p> homme<br/>
                    <?php echo infoU($db,$_SESSION['idUtilisateur'])['Nom']?><br/>
                    <?php echo infoU($db,$_SESSION['idUtilisateur'])['Prenom']?><br/>
                    <?php echo infoU($db,$_SESSION['idUtilisateur'])['NomUtilisateur']?><br/>
                    <?php echo infoM($db,$_SESSION['idUtilisateur'])['code_postal']?><br/>
                    <?php echo infoM($db,$_SESSION['idUtilisateur'])['Ville']?><br/>
                    <?php echo infoM($db,$_SESSION['idUtilisateur'])['numero_voie'],' ',infoV($db,$_SESSION['idUtilisateur'])['TypeName'],' ',infoM($db,$_SESSION['idUtilisateur'])['Voie'] ?><br/>
                    <?php echo infoU($db,$_SESSION['idUtilisateur'])['Mail']?><br/>
                    <?php echo infoU($db,$_SESSION['idUtilisateur'])['Mobile']?><br/>
                    <?php echo infoU($db,$_SESSION['idUtilisateur'])['Numero']?><br/>
                </p>
        	</aside>
            </div>
        	<h1>Changer données personnelles</h1>
                <form action="../../Controleur/controleur_gestion.php" method="post">
        		<label for="Nom d'utilisateur"> Nom d'utilisateur:</label><input type="text" name="Nom_utilisateur" /><br/>
				<label for="Mot de passe"> Mot de passe:</label><input type="password" name="Mot_de_passe" /><br/>
                <label for="Confirmer le mot de passe"> Confimer le mot de passe:</label><input type="password"  name="confirmer"/> <br/>
                <label for="Numero voie"> Adresse:</label><input type="text" name="numero_voie"/>
                    <select name="TypeValue">
                        <?php foreach ($Type as $ligne){ ?>
                            <option value=<?=$ligne["TypeValue"]?>>
                                <?= $ligne['TypeName']?></option>
                        <?php } ?>
                    </select>
                <label for="Voie"></label><input type="text" name="Voie"/><br/>
                <label for="Code postal"> Code postal:</label><input type="text" name="code_postal"/><br/>
                <label for="Vile"> Ville:</label><input type="text" name="Ville"/><br/>
                <label for="email"> email:</label><input type="email" name="email"/><br/>
                <label for="Numéro de téléphone"> Numéro de téléphone:</label><input type="tel" name="mobile"/><br/>
                <label for="Numéro de téléphone fixe"> Numéro de téléphone fixe:</label><input type="tel" name="fixe"/><br/>

            <h1>Saisie du mot de passe actuel pour confirmé</h1>
                    <label for="Mot de passe actuel"> Mot de passe actuel:</label><input type="password" name="Mot_de_passe_actuel" /><br/>
				<label for="valider"></label><input type="submit" name="valider" />
                </form>
            <aside>
            </aside>
            <article>                
            </article>
        </section>
        
        <footer>
            
        </footer>
        <script type="text/javascript" src="../JS/admin_bouton.js"></script>
    </body>
