<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 13/09/2018
 * Time: 4:54 PM
 */

$template = new stdClass();

$template->application ="Cosmos Reactor";
$template->tilte = "Cosmos | Reactor";


$button = new stdClass();
$button->login ="LOGIN";
$button->subscribe = "SUBSCRIBE";

//side bar
$button->database = "Database";
$button->mining = "Crypto Mining";

$url = new stdClass();
$url->database ="rout.php?q-rout=database";
$url->mining ="rout.php?q-rout=mining";