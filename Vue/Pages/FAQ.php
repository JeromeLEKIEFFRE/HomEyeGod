<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style_FAQ.css"/>
    <title>FAQ</title>
</head>

<body>
<header>
    <h1><a href="home_page.html"><img src="logo-accueilDiv2.png"  alt="logo HomEyeGod" /></a></h1>
</header>

<nav>
    <ul id="navigation">
        <!-- prendre sur Bandeau.html -->
        <li><a href="gestioncompte.php">Mon Compte</a></li>
        <li><a href="Gestion_Maison.php">Ma maison</a></li>
        <li><a href="FAQ.php">Aide</a></li>
    </ul>
</nav>

<h2>Besoin d'aide ?</h2>
<section>

    <h3>Questions fréquemment posées</h3>

    <button name="question_1" onclick="toggle_Reponse()" value="appuye"></button>
    <div id="Reponse" style="display:none">

    </div>


    <button name="question_2" onclick="toggle_Reponse_2()" value="appuye_2">Comment ajouter un capteur ?</button><br/>
    <div id="Reponse_2" style="display:none">
        Pour ajouter un capteur, allez sur l'onglet "Ma maison" puis cliquez sur ajouter un capteur.
    </div>
    <br/>

    <button name="question_3" onclick="toggle_Reponse_3()" value="appuye_3">Comment modifier l'interface de gestion ?</button><br/>
    <div id="Reponse_3" style="display:none">
        Pour créer un compte, veuillez cliquer sur inscription afin de remplir le formulaire avec vos informations.
        Si vous ne remplissez pas correctement les champs, des messages d'erreur s'afficheront afin de
        vous permettre de les remplir convenablement.
    </div>
    <br/>

    <button name="question_4" onclick="toggle_Reponse_4()" value="appuye_4">Que faire si l'un de mes capteurs ne fonctionne plus ?</button><br/>
    <div id="Reponse_4" style="display:none">
        Si l'un de vos capteurs ne fonctionne plus, prenez contact avec le service client afin d'identifier le problème et
        de prendre rendez-vous avec un technicien si necéssaire.
    </div>
    <br/>

    <button name="question_5" onclick="toggle_Reponse_5()" value="appuye_5">Comment modifier mes informations ?</button><br/>
    <div id="Reponse_5" style="display:none">
        Pour modifier vos informations, cliquez sur l'onglet "Mon Compte" puis remplissez à nouveau les champs.
    </div>

    <p> Contactez nous par mail à l'adresse DomIsep@gmail.com ou par téléphone au 01 23 45 67 89</p>



    <script type="text/javascript">
        function toggle_Reponse() {
            var x = document.getElementById("Reponse");
            if (x.style.display === 'none') {
                x.style.display = 'block';
            }
            else {
                x.style.display = 'none';
            }
        }
        function toggle_Reponse_2() {
            var x = document.getElementById("Reponse_2");
            if (x.style.display === 'none') {
                x.style.display = 'block';
            }
            else {
                x.style.display = 'none';
            }
        }
        function toggle_Reponse_3() {
            var x = document.getElementById("Reponse_3");
            if (x.style.display === 'none') {
                x.style.display = 'block';
            }
            else {
                x.style.display = 'none';
            }
        }
        function toggle_Reponse_4() {
            var x = document.getElementById("Reponse_4");
            if (x.style.display === 'none') {
                x.style.display = 'block';
            }
            else {
                x.style.display = 'none';
            }
        }
        function toggle_Reponse_5() {
            var x = document.getElementById("Reponse_5");
            if (x.style.display === 'none') {
                x.style.display = 'block';
            }
            else {
                x.style.display = 'none';
            }
        }
    </script>

</section>

</body>
</html>