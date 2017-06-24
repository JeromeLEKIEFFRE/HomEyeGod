<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Créer un compte</title>
</head>

<?php

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
include ("../Modele/fonction_gestion_compte.php");
?>
    <body>
        <header>
            <h1><a href="home_page.html"><img src="logo-accueil.png" height="15%" width="15%" alt="logo HomEyeGod" /></a></h1>
        </header>
        <nav>
            <ul id="navigation">
                <li><a href="home_page.html" alt="logo Home">Accueil <!--<img src="logo_accueil.png" alt="retour vers l'accueil"/></a></li>-->   <!-- ici mettre le logo accueil -->
                <li><a href="mon_compte.html">Mon Compte</a></li>
                <li><a href="ma_maison.html">Ma maison</a></li>
                <li><a href="boutique.html">Boutique</a></li>
                <li><a href="qui_sommes_nous.html">Qui sommes nous?</a></li>
                <li><a href="aide_contact.html">Aide/Contact</a></li>
            </ul>
        </nav>

        <section>
        	<h1>Données personnelles</h1>
            <div class="gestion_c">
            <aside>
        		<p>Sexe <?php ?><br/>
        		Nom<br/>
        		Prénom  <br/>
        		Nom d'utilisateur<br/>
        		Code postal<br/>
        		Ville<br/>
        		adresse<br/>
        		email<br/>
        		Numéro de téléphone<br/>
                Numéro de téléphone Fixe</p>
            </aside>
        	<aside>
                <p> homme<br/>
                    <?php echo infoU($db,1)['Nom']?><br/>
                    <?php echo infoU($db,1)['Prenom']?><br/>
                    <?php echo infoU($db,1)['NomUtilisateur']?><br/>
                    <?php echo infoM($db,1)['code_postal']?><br/>
                    <?php echo infoM($db,1)['Ville']?><br/>
                    <?php echo infoM($db,1)['numero_voie'],' ',infoV($db,1)['TypeName'],' ',infoM($db,1)['Voie'] ?><br/>
                    <?php echo infoU($db,1)['Mail']?><br/>
                    <?php echo infoU($db,1)['Mobile']?><br/>
                    <?php echo infoU($db,1)['Numero']?><br/>
                </p>
        	</aside>
            </div>
            <?php/*
            $Type1 = $bdd->query('SELECT * FROM typevoie');
            $Type = $Type1 -> fetchAll();
            ?>
        	<h1>Changer données personnelles</h1>
                <form action="../Modele/fonction_gestion_compte.php" method="post">
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
				<label for="valider"></label><input type="submit" name="valider" />
                </form>*/?>
            <aside>
            </aside>
            <article>                
            </article>
        </section>
        
        <footer>
            
        </footer>
        
    </body>
