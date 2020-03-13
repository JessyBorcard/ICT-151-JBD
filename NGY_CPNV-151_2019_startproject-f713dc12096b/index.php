
<?php

require "controler/controler.php";
if(isset($_GET['action'])){
$action = $_GET['action'];


switch ($action){
case 'home':
home();
break;
case 'login':
login($_POST);
break;
case 'logout':
logout();
break;
case 'register':
register($_POST);
break;
case 'products':
products(@$_GET["type"],@$_GET["code"] );
break;
case 'error':
error();
break;
    case 'aSnow':
        aSnow();
        break;
    case 'edit':
        edit($_GET["code"]);
        break;
    case 'addSnow':
        addSnow($_POST);
        break;
default:
home();

}

}else{

home();

}


?>