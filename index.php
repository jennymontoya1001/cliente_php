<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingresar datos</h1>
<form action="insertar.php" method="POST">
    <div>
        <label><strong>DNI</strong></label>
        <input type="text" name="dni"/>
    </div>
    <div>
    <label><strong>Nombre</strong></label>
        <input type="text" name="nombre"/>
    </div>
    <div>
    <label><strong>Apellido</strong></label>
        <input type="text" name="apellido"/>
    </div>
    <div>
    <label><strong>Dirección</strong></label>
        <input type="text" name="direccion"/>
    </div>
    <div>
    <label><strong>Fecha Nacimiento</strong></label>
        <input type="date" name="fech_nac">
    </div>
    <button type="submit"><strong>Enviar</strong></button>
</form>
</body>
</html>