<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);//showing errors in browser
include 'libs/load.php';
load_template("head");
load_template("navbar");
load_template("hero_main");
load_template("hero_sub");
load_template("footer");
?>