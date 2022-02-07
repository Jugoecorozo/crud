<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de usuarios</title>
</head>
<body>
    <div class="justify-content-center">
        <table border="1" >
        <tr>
            <td>NOMBRE</td>
            <td>CARGO</td>
            <td>CONTACTO</td>
            <td>NUMERO ACTA</td>
        </tr>
        <?php
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            $sql = "SELECT * FROM asistentes";
            $res = $conexion ->query($sql);

            foreach($res as $fila) {
                echo "<tr>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['cargo']."</td>";
                echo "<td>".$fila['contacto']."</td>";
                echo "<td>".$fila['numeroacta']."</td>";
                echo "</tr>";
            }
 
        } catch (PDOException $e) {
            print "Huy zona!: " . $e->getMessage() . "<br/>";
            die();
        }
        ?>
    </table>
</div>
    
</body>
</html>