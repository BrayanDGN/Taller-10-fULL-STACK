<?php

function add ($x,$y){
    return $x+$y;
}

function substract ($x,$y){
    return $x-$y;
}

function multiply ($x,$y){
    return $x*$y;
}

function split ($x,$y){
    return $x/$y;
}

$firstNumber = 0;
$secondNumber = 0;
$result= 0;


if (isset( $_POST["first_number"]) && 
    isset($_POST["second_number"]) && $_POST ['operation_type'] ){
        $firstNumber = intval($_POST ["first_number"]) ;
        $secondNumber = intval ($_POST ["second_number"]);
        $operationType= $_POST ['operation_type'];

    switch ($operationType) {
        case 'add':
            $result = add($firstNumber,$secondNumber); 
            $color = "green"; 
            $message= "SUMAR";          
            break;
        case 'substract':
            $result = substract($firstNumber,$secondNumber);  
            $color = "red"; 
            $message = "RESTAR";       
            break;
        case 'multiply':
            $result = multiply($firstNumber,$secondNumber);            
            $color = "violet";  
            $message = "MULTIPLICAR";
            break;
        case 'split':
            $result = split($firstNumber,$secondNumber);            
            $color = "blue";  
            $message = "DIVIDIR";
            break;
    } return $result;

    }
?>