<?php

$url = $_SERVER['REQUEST_URI'];
$sepUrl = explode("?", $url);
$url = $sepUrl[0];


include "controller/controller_about.php";
include "controller/controller_UiUxdesign.php";
include "controller/controller_development.php";
include "controller/controller_seo.php";
include "controller/controller_portfolio.php";
include "controller/controller_contacts.php";


if($url == '/') {
    $home = new home();
    $home->show();
}

if($url == '/development') {
    $services = new services();
    $services->show();
}

if($url == '/ui-ux-design') {
    $design = new design();
    $design->show();
}
if($url == '/seo') {
    $seo = new seo();
    $seo->show();
}
if($url == '/portfolio') {
    $portfolio = new portfolio();
    $portfolio->show();
}
if($url == '/contacts') {
    $contacts = new contacts();
    $contacts->show();
}

?>