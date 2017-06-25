<?php
include ('../Modele/recup.php');

array ( "abc" => "def" );

echo $_POST['html_code'];
echo $_POST['p_name'];
submit_modif($db, $_POST['p_name'], $_POST['html_code']);