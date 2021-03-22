<?php 
    include('connect.php');
    $tpl = 'includes/templates/';
    $css = 'layout/css/';
    $js = 'layout/js/';
    $lang = 'includes/langs/';
    include('includes/functions/functions.php');
    include($tpl . 'header.php');
    include($lang . 'en.php');
    if(!isset($noNavbar)){
        include('navbar.php');
    }
?>