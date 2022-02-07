
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de participantes</title>
    <h1>PARTICIPANTES</h1>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <form action="guardar.php" method="POST">
        <ul>
            <h2>Registro de participantes</h2>
            <li>
                <label >Nombre completo</label>
                <input type="text" name="name"> 
            </li>
            <br>
            <li>
                <label >Cargo del funcionario</label>
                <input type="text" name="Cargo">
            </li>
            <br>
            <li>
                <label >N° de contacto</label>
                <input type="number" name="Ncontacto">
            </li>
            <br>
            <button>Registrar</button>
            <a href="lista.php">Ver asistentes</a>
        </ul>
    </form>
    
    <?php
    if(isset($_POST['name'])&& isset($_POST['Cargo'])&& isset($_POST['Ncontacto']))
    require_once "conectarpdo.php";
    ?>

</body>
</html>