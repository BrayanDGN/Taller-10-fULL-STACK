<form 
    action = "./view/page/viewUserDates.php"
    method ="get">
    <h2>REGISTRO DE DATOS DE USUARIO</h2>
    <div>
        <div>
        <label for="user-name">Digite su nombre:</label>
            <input 
                id="user-name"
                type="text"
                name="user_name"
                placeholder="Brayan"
            >
        </div> 
        <div>
        <label for="last-name">digite su apellido:</label>
            <input 
                id="last-name"
                type="text"
                name="last_name"
                placeholder="González"
            >
        </div>
        <div>
        <label for="user-id">digite su numero de idetificación:</label>
            <input 
                id="user-id"
                type="text"
                name="user_id"
                placeholder="1.000.097.812"
            >
        </div>
        
    </div>
    
    <button>Registrar</button>
</form>