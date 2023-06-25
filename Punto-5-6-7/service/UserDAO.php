<?php
    include "conecction.php";

    function getAllUsers(){
       return mysqli_query(CONECCTION, "SELECT * FROM usuarios"); 
    }

    function getIdNumber($idNumber){
        return mysqli_query(CONECCTION, "SELECT * FROM usuarios WHERE cedula = $idNumber"); 
    }

 //   print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>