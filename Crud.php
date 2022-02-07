<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <h1>ACTA DE REUNION UNICORDOBA</h1>
    <link rel="stylesheet" href="Estilos.css">

</head>
<body>
    <form action="guardaracta.php" method="POST">
        <ul>
            <h2>Registro de acta</h2>
            <li>
                <label>N° de acta</label>
                <input type="number" name="numeroacta">
            </li>
            <br>
            <li>
                <label>Lugar de la reunión</label>
                <input type="text"  name="lugar">
                <br>
                <br>
                <li>
                <label>Convocador de la reunión</label>
                <input type="text"  name="convocador">
            </li>
            </li>
            <br>
            <li>
                <label>Fecha y Hora</label>
                <input type="date"  name="fecha">
            </li>
        </ul>
        <br>
        <button>Registrar reunión</button>
        <a href="Ingreso.php">Registrar participantes</a>
        <a href="actas.php">Ver actas generadas</a>
        <br>

    </form>
    <?php
    if(isset($_POST['numeroacta'])&& isset($_POST['lugar'])&& isset($_POST['convocador'])&& isset($_POST['fecha']))
    require_once "conectarpdo.php";
    ?>
    <h4>Integrantes:</h4>
    <h5>Daniel Ricaurte Rodriguez</h5>
    <h5>Jesus Argumedo Seña</h5>
    <h5>Oscar Dario Lopez </h5>
</body>
</html>