<?php include "./controller/ageCalculationController.php" ?>

<form method = "post">
    <h2>REGISTRO DE EDAD</h2>
    <div>
        <div>
        <label for="user-name">Digite su nombre:</label>
            <input 
                id="user-name"
                type="text"
                name="user_name"
                placeholder="Brayan Gonzalez"
            >
        </div> 
        <div>
        <label for="age">digite su edad:</label>
            <input 
                id="age"
                type="text"
                name="age"
                placeholder="6"
            >
        </div>
        
    </div>
    
    <button>Ingresar</button>
</form>