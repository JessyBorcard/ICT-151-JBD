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


?>