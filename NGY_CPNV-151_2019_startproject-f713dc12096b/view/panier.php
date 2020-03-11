<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : jessy.borcard
 * Date : 06.03.2020
 * Time : 11:48
 *
 *
 */


ob_start();
$titre = "Rent A Snow - Panier";

require_once "model/SnowsManagement.php";

var_dump($_SESSION["panier"]);
?>



<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>
