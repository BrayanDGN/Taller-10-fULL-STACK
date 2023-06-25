<?php

    $userName= "";
    $ageUser= 0;
    $message = "¿El usuario es mayor o no de edad?";
    $color= "rgb(17, 17, 129)";

    if (isset($_POST["user_name"]) && $_POST["age"]){
        $userName= $_POST["user_name"];
        $ageUser= $_POST["age"]; 

        if ($ageUser <18){
            $color = "red";
            $message = "El usuario " . $userName . " es menor de edad";
        } else{
            $color = "green";
            $message = "El usuario " . $userName . " es mayor de edad";

        }
    }
?>