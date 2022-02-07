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
	$nombre = $_POST['name'];
	$cargo = $_POST['Cargo'];
	$contacto = $_POST['Ncontacto'];

    $r = $conexion ->prepare("INSERT INTO asistentes( nombre, cargo, contacto) VALUES(?,?,?)");
    $resu = $r -> execute([$nombre, $cargo, $contacto]);
    if ($resu == true) {
        echo "datos guardados correctamente";
    }
?>


</body>
</html>