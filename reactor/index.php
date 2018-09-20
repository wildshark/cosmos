<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 13/09/2018
 * Time: 7:11 AM
 */

include "../reactor/config/config.php";
include "../reactor/config/template.php";

if(isset($_GET['rout'])){
    $page = $_GET['rout'];
}else{
    $page = $_POST['rout'];
}

if (empty($page)){
    header("location: ../index");
}else{
    if ($page === "login"){
        require_once "login.phtml";
    }
}