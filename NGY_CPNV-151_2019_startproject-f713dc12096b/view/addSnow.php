<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : jessy.borcard
 * Date : 11.03.2020
 * Time : 15:35
 *
 *
 */
ob_start();
$titre = "Rent A Snow - Add a snow";

require_once "model/SnowsManagement.php";


?>

<form method="post" action="index.php?action=addSnow.php">
    <label>Code :<input type="text" class="w-100" name="codeAdd"  required></label>
    <label>Marque :
    <input type="text" class="w-100" name="marque" required></label>
    <label>Model :
    <input type="text" class="w-100" name="model" required></label>
    <label>Longueur :
    <input type="number" class="w-100" name="longueur" required></label>
    <label>Quantité :
        <input type="number" class="w-100" name="quantite" required></label>
    <label>Descripton :
        <input type="text" class="w-100" name="descripton" required></label>
    <label>Prix :
        <input type="number" class="w-100" name="prix" required></label>
    <label>Photo :
        <input type="file" class="w-100" name="photo" required></label>
    <label>Active :
        <input type="number" class="w-100" name="active" required></label>

    <button type="submit" class="w-100">Valider</button>

</form>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>