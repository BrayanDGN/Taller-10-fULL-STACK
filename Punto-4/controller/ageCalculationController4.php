<?php

    $message = "¿El usuario es mayor o no de edad?";
    $color= "rgb(17, 17, 129)";


    if (isset($_POST["born"]) 
    && isset($_POST["user_name"])){
        $userName = $_POST["user_name"];
        $born = new DateTime ($_POST["born"]);
        $today = new DateTime ();
        
        $difference = $born ->diff($today); 
        $difference->days;      
        if ($difference->days < 6570 ){
            $color = "red";
            $message = "El usuario " . $userName . " es menor de edad";
        } else{
            $color = "green";
            $message = "El usuario " . $userName . " es mayor de edad";

        }
    }
?>