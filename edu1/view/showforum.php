<?php
require_once('../controller/forumc.php');
require_once('../model/forum.php');
$forum = new forum("122", "FAROUK", "TITLE", "aaaaa", "time", "");
$forumc = new forumc();
$forumc->show($forum);
?>