<?php include "./controller/ageCalculationController4.php" ?>

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
        <label for="born">digite su fecha de nacimiento:</label>
            <input 
                id="born"
                type="date"
                name="born"
            >
        </div>
        
    </div>
    
    <button>Ingresar</button>
</form>