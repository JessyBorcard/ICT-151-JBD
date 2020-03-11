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
    $snows = $_POST["snows"];
    $index = 0;
    $index2 = 0;
    $index3 = 2;
    $snow_index = 0;
    @$vendor =  $_SESSION['vendor'];
    if (isset( $vendor) && $vendor == 1){
        echo "<table style='width: 100%;'><thead><tr>
                <th>Code</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Longueur</th>
                <th>Prix</th>
                <th>Disponibilité</th>
                <th>photo</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr></thead><tbody>";
    }
    foreach ($snows as $elements):


        ?>
    <?php if (isset($vendor) && $vendor == 1): ?>

        <tr><td><?php echo "$elements[1]"; ?></td><td><?php echo "$elements[2]";  ?></td><td><?php echo "$elements[3]";  ?></td><td><?php echo "$elements[4]";  ?></td><td><?php echo "$elements[5]";  ?></td><td><?php echo "$elements[7]";  ?></td><td><img src=<?php echo $elements[8] ?> alt="Snow" title="Snow"/></td><td><a href="index.php?action=products&type=delete&code=<?php echo $elements[1] ?>"><img src="view/content/images/delete2.png" alt="Snow" title="Snow"/></a></td><td><a href="index.php?action=products&type=edit&code=<?php echo $elements[1] ?>"><img src="view/content/images/edit2.png" alt="Snow" title="Snow"/></a></td></tr>


    <?php else: ?>
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
                    <p><a href="index.php?action=aSnow&snow=<?=$snow_index?>" class="btn btn-primary" id="btn<?=$snow_index?>">Read More...</a></p>
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






    <?php endif; ?>


        <?php
    $snow_index++;
        $index++; endforeach; ?>

    <?php  if (isset( $vendor) && $vendor == 1){
        echo "</tbody></table><a href='index.php?action=addSnow'><button class='w-100'>Ajouter un Snow</button></a>";
        } ?>
    <?php
    $contenu = ob_get_clean();

    require "gabarit.php";

    ?>

