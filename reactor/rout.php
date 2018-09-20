<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 13/09/2018
 * Time: 8:15 PM
 */

include "../reactor/config/config.php";
include "../reactor/config/template.php";
include "../reactor/config/connection.php";

if (isset($_GET['q-rout'])){
    $rout = $_GET['q-rout'];
}elseif(isset($_POST['q-rout'])){
    $rout = $_POST['q-rout'];
}

switch ($rout){

    case"dash";
        require "template/dashboard.phtml";
    break;
}