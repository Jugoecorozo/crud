<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nam="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php

	//conexion con la base de datos y el servidor
    include_once"conectarpdo.php";
	//obtenemos los valores del formulario
	$numeroacta = $_POST['numeroacta'];
	$lugar = $_POST['lugar'];
	$convocador = $_POST['convocador'];
    $fecha = $_POST['fecha'];

    $r = $conexion ->prepare("INSERT INTO acta( numeroacta, lugar, convocador, fecha) VALUES(?,?,?,?)");
    $resu = $r -> execute([$numeroacta, $lugar, $convocador, $fecha]);
    if ($resu == true) {
        echo "datos guardados correctamente";
    }
?>


</body>
</html>