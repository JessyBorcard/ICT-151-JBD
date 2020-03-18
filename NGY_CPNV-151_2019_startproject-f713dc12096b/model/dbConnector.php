<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 05.02.2020
 * Time : 15:43
 *
 *
 */

function executeQuery($query){
    $dbh = openDbConnection($query);

    $statement = $dbh->prepare($query);
    $statement->execute();
    $queryResult = $statement->fetchAll();
    $dbh = null;

    return $queryResult;
}

function openDbConnection($query)
{

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $userName = 'root';
    $userPwd = '1234';


    $dbName = 'snows';
    $dbEncoding = 'utf8';
    $dbPort = '5001';


    $dsn = $sqlDriver . ":host=" . $hostname . ";dbname=" . $dbName. ";port=" . $dbPort . ";charset". $dbEncoding;
    try {
        $dbh = new PDO($dsn, $userName, $userPwd);







    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }


    return $dbh;

}
?>