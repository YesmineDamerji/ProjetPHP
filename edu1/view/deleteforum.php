<?php
include __DIR__.'/../controller/forumc.php';
include __DIR__.'/../model/forum.php';


$ForumC = new ForumController();
if (isset($_GET["id"])) {
    $ForumC->deleteForum($_GET["id"]);
    header("Location:pages/table.php");
}
else {
    echo "Missing id get parameter";
}