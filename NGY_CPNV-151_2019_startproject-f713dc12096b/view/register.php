<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 20.01.2020
 * Time : 14:20
 *
 *
 */


ob_start();
$titre = "Rent A Snow - register";


?>
    <form method="post" action="index.php?action=register">
        <label>User name</label><input type="text" name="usernameregister" required><br>
        <label>password</label><input type="password" name="passwordregister" required><br>
        <input  type="checkbox" name="bool" hidden="">
        <input type="submit">   <input type="reset" value="reset">
    </form>



<?php
require_once "controler/controler.php";

?>

<?php

$contenu = ob_get_clean();



require  "gabarit.php";

?>