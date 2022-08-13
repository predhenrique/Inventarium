<?php
    session_start();    

    $login = $_POST["txLogin"];
    $pass = $_POST["txPass"];

    //echo "$login $pass";

    if($login=="admin" && $pass=="123"){
        $_SESSION["autorizacao"] = true;
        header("Location:painel.php");
    }
    else{
        $_SESSION["autorizacao"] = false;
        unset($_SESSION["autorizacao"]);
        session_destroy();
        header("Location:index.php");
    }
?>