<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 151_2019_ForStudents
 * Created  : 05.02.2019 - 18:40
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */


session_start();
require  "model/model.php";

function home()
{


    $_GET['action'] = "home";
    require "view/home.php";
}

function error()
{

    $_GET['action'] = "error";
    require "view/error.php";
}

function login($in)
{

    $bool = 0;
    $password = @$in['password'];
    $username = @$in['login'];
    $checkedpassword = checkPassword($username, $password);
    if (!$password) {

        $_GET['action'] = "login";
        require "view/login.php";
    } else {

        if ($checkedpassword == FALSE) {

            $bool = 1;
            $_SESSION['login'] = $username;

            $_GET['action'] = "home";
            require "view/home.php";
        } else {

            $_GET['action'] = "login";
            require "view/login.php";
            $bool = 2;
        }

    }
}




function register($in){



    $_GET['action']="register";
    require "view/register.php";

    $password = @$in['passwordregister'];
    $username = @$in['usernameregister'];


    if(isset($password)) {

        require_once "model/userManagement.php";
        createUser($username, $password);
    }
}

function products(){


    $_GET['action'] = "products";
    require "view/products.php";

}


function logout(){

    unset($_SESSION['login']);
    session_destroy();

    $_GET['action'] = "home";
    require "view/home.php";

}
?>