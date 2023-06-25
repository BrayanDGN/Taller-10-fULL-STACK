<?php include "./controller/calculationController.php" ?>

<form method = "post">
    <h2>CALCULADORA</h2>
    <div>
        <div>
        <label for="operation-type">Tipo de Operación:</label>
            <select 
                    name="operation_type"
                    id="operation-type"
                    >
                    <option value="add"> Sumar</option>
                    <option value="substract"> Restar </option>
                    <option value="multiply"> Multiplicar </option>
                    <option value="split"> Dividir</option>
            </select>
        </div> 
        <div>
        <label for="first-number">Primer número a operar:</label>
            <input 
                id="first-number"
                type="text"
                name="first_number"
                placeholder="6"
            >
        </div>
        <div>
        <label for="second-number">Primer número a operar:</label>
            <input 
                id="second-number"
                type="text"
                name="second_number"
                placeholder="9"
            >
        </div>
    </div>
    
    <button>Calcular</button>
</form>