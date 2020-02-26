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

function checkPassword($username, $password)
{
    require_once "userManagement.php";
    $data= getUser($username);


    $username2 = "";
    $password2 = "";
    $pseudo ="";

    $bool = FALSE;

    if(!$data == null) {
        foreach ($data as $elements) {

            if($username == $elements["userEmailAddress"] || $username = $elements["pseudo"]) {

                $username2 = $elements["userEmailAddress"];
                $password2 = $elements["userPsw"];




                $pseudo = $elements["pseudo"];
            }

        }
    }else{

        $bool = FALSE;
    }

    if (password_verify($password, $password2) && ($username == $username2 || $username == $pseudo)){
        $bool = FALSE;
    }else{
        if($username == "jessy.borcard@cpnv.ch"){
            $_POST['vendor']
        }
        $bool = TRUE;
    }




    return $bool;
}


?>