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
$titre = "Rent A Snow - A Snow";

require_once "model/SnowsManagement.php";
$data = $_POST["snows"];
$key = $_GET["snow"];

foreach($data as  $value) {



    if($key == $value["id"]){

        $key2 = $value;
    }
}


$snow = $key2;
?>



  <div class="thumbnail">
                <a href=<?php echo $snow[8] ?>><img src=<?php echo "view/content/images/" . substr($snow[8], -14, 4) . ".jpg"  ?> alt="Snow" title="Snow"/></a>
                <div class="caption">
                    <h3><?php echo $snow[1] ?></h3>
                    <p> Marque : <?php echo $snow[2] ?></p><br>
                    <p> Modèle : <?php echo $snow[3] ?></p><br>
                    <p> Longueur : <?php echo $snow[4] ?></p><br>
                    <p> Prix : <?php echo $snow[5] ?></p><br>
                    <p> disponibilité : <?php echo $snow[7] ?></p>
                    <p> Descriptions : <?php echo $snow[6] ?></p>
                   <a href="index.php?action=delete&code=<?=$snow[0];?>&codeedit=<?=$snow[1] ?>" onclick="addSnowToCart()" class="w-100"><button class="w-100">Ajouter au panier</button></a>
                </div>
            </div>

<script type="javascript">

    function addSnowToCart() {
        <?php
            $a = 0;
            $array[] = 0;
        foreach ($data as $element){


            $array[$a] = array("bought" => false);
            $a++;
        }

$cart = $array;

        $_SESSION["panier"] = $cart ?>
    }

</script>



<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>
