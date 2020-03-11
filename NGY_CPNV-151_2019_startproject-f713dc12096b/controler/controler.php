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

        if ($checkedpassword >= 1) {
            if($checkedpassword == 2){
                $_POST['vendor'] = 1;

            }else{

                $_POST['vendor'] = 0;

            }
            $bool = 1;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            $_SESSION['vendor'] = $_POST['vendor'];

            $_GET['action'] = "home";
            require "view/home.php";
        } else {

            $_GET['action'] = "login";
            require "view/login.php";
            $bool = 0;
        }

    }
}




function register($in){



    $_GET['action']="register";
    require "view/register.php";

    $password = @$in['passwordregister'];
    $username = @$in['usernameregister'];


 $result = checkEmail($username);
if($result == TRUE){


    echo "<p>Email déjà utilisté</p>";
}else {
    if (isset($password)) {

        createUser($username, $password);
    }
}
}


function products($type, $code){

    if(isset($code)){
        if($type == "delete") {
            require_once "model/SnowsManagement.php";
            deleteSnow($code);
        }
    }

    require_once "model/SnowsManagement.php";
    $snows = getSnows();
    $_POST["snows"] = $snows;
    $_GET['action'] = "products";
    require "view/products.php";

}

function aSnow(){


    require_once "model/SnowsManagement.php";
    $snows = getSnows();
    $_POST["snows"] = $snows;
    $_GET["action"] = "aSnow";
    require "view/aSnow.php";


}

function panier(){

    $_GET["action"] = "panier";
    require "view/panier.php";

}


function edit($code, $codeedit){

    require_once "model/SnowsManagement.php";
    $snows = getSnows();
    $_POST["snows"] = $snows;

    $_GET["action"] = "edit";
    require "view/edit.php";

}

function addSnow($in){
    if(isset($in)){
        require_once "model/SnowsManagement.php";
        addSnowModel();

    }else {
        $_GET["action"] = "addSnow";
        require "view/addSnow.php";
    }
}



function logout(){

    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['vendor']);
    unset($_SESSION['code']);
    unset($_SESSION['panier']);
    session_destroy();

    $_GET['action'] = "home";
    require "view/home.php";

}
?>