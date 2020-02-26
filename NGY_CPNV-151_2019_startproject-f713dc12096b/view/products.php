<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 26.02.2020
 * Time : 14:16
 *
 *
 */


ob_start();
$titre = "RentASnow - Produits";

?>
<div>
    <?php
    require_once "model/SnowsManagement.php";
    $snows = getSnows();
    $index = 0;
    $index2 = 0;
    $index3 = 2;
    foreach ($snows as $elements):


        ?>

        <?php if ($index == $index2): ?>
        <div class="row-fluid">

        <div class="span12">

        <div class="yoxview">
        <div class="row-fluid">

        <ul class="thumbnails">
    <?php endif; ?>
        <li class="span3">
            <div class="thumbnail">
                <a href=<?php echo $elements[8] ?>><img src=<?php echo $elements[8] ?> alt="Snow" title="Snow"/></a>
                <div class="caption">
                    <h3><?php echo $elements[1] ?></h3>
                    <p> Marque : <?php echo $elements[2] ?></p><br>
                    <p> Modèle : <?php echo $elements[3] ?></p><br>
                    <p> Longueur : <?php echo $elements[4] ?></p><br>
                    <p> Prix : <?php echo $elements[5] ?></p><br>
                    <p> disponibilité : <?php echo $elements[7] ?></p>
                    <p><a href="#" class="btn btn-primary">Read More...</a></p>
                </div>
            </div>
        </li>

        <?php if ($index == $index3): ?>
        </ul>
        </div>


        </div>

        </div>

        </div>
        <?php $index2 = $index2 + 3;
        $index3 = $index3 + 3; endif; ?>
        <?php $index++; endforeach; ?>
    <?php
    $contenu = ob_get_clean();

    require "gabarit.php";

    ?>

