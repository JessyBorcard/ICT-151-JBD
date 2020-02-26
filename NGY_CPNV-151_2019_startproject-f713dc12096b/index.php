
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
products();
break;
case 'error':
error();
break;
default:
home();

}

}else{

home();

}


?>