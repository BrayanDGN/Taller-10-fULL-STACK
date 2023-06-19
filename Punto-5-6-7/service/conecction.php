<?php
    const CONECCTION = new mysqli("localhost","root","","mi_proyecto"); 

    $quey= mysqli_query(CONECCTION, "SELECT * FROM usuarios");

    print_r(mysqli_fetch_all($quey, MYSQLI_ASSOC));
?>