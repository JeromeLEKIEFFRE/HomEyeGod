<?php
include ('../Modele/recup.php');
submit_modif($db, $_POST['p_name'], $_POST['html_code']);
header("../Vue/HTML/page_admin.php");
