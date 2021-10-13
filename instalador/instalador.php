<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/styles.css">
    <title>Instaldor</title>
</head>
<body style="display: flex; justify-content: center;">
    
    <form style="color: white;" action="ejecutar-instalador.php" method="POST">
        <h1>Instalador de la APP</h1>
        A continuaci&oacute;n se proceder&aacute; a instalar el Traductor.<br>
		Sin embargo requiere de que la <strong>base de datos</strong> sea creada con anterioridad. <br><br>

        <div class="card" style="color: black;">
            Nombre servidor:
                <input type="text" name="servidor" >
        </div>
        
        <div class="card" style="color: black;">
            Nombre usuario:
                <input type="text" name="usuario" >
            
        </div>
        <div class="card" style="color: black;">
            Contraseña:
                <input type="password" name="contraseña" >
            
        </div>
        <div class="card" style="color: black;">
            Base de datos
                <input type="text" name="base-de-datos" >
            
        </div>
        <div class="card">
        <button type="submit" style="justify-content: center;">Enviar</button>
        </div>
    
    </form>
</body>
</html>