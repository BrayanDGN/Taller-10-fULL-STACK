<?php

$userName = "";
$lastName = "";
$userId = "";

if (isset($_GET["user_name"]) 
    && isset ($_GET["last_name"])
    && isset ($_GET["user_id"])){
       $userName  = $_GET["user_name"];
       $lastName = $_GET["last_name"];
       $userId = $_GET["user_id"];
    }
?>