<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 26.02.2020
 * Time : 14:15
 *
 *
 */


function getSnows(){



    $query = 'SELECT * from snows';
    require_once "dbConnector.php";
    $queryResult = executeQuery($query);
    return $queryResult;
}

function deleteSnow($code){

    $query = "DELETE FROM snows WHERE code = '{$code}'";
    require_once "dbConnector.php";
     executeQuery($query);


}

function addSnowModel($in){

    $photo = "view/content/images/" . substr($in["photo"], 0, 4) . ".jpg";

    $query = "INSERT INTO `snows` ( `code`, `brand`, `model`, `snowLength`, `qtyAvailable`, `description`, `dailyPrice`, `photo`, `active`) VALUES
	( '{$in["codeAdd"]}', '{$in["marque"]}', '{$in["model"]}', {$in["longueur"]}, {$in["quantite"]}, '{$in["descripton"]}', {$in["prix"]}, '{$photo}', {$in["active"]})";

    require_once "dbConnector.php";
    executeQuery($query);
}

function editASnow($in){

    $query = "UPDATE snows SET code =  '{$in["code"]}', brand =  '{$in["marque"]}', model = '{$in["model"]}', snowLength = {$in["longueur"]}, qtyAvailable = {$in["quantite"]}, description = '{$in["description"]}', dailyPrice =  {$in["prix"]} WHERE id = {$in["id"]} ";


    require_once "dbConnector.php";
    executeQuery($query);


}
?>