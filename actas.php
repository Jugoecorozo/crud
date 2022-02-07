<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de actas</title>
</head>
<body>
    <table border="1" >
        <tr>
            <td>NUMERO ACTA </td>
            <td>LUGAR</td>
            <td>CONVOCADOR</td>
            <td>FECHA</td>
        </tr>
        <?php
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            $sql = "SELECT * FROM acta";
            $res = $conexion ->query($sql);

            foreach($res as $fila) {
                echo "<tr>";
                echo "<td>".$fila['numeroacta']."</td>";
                echo "<td>".$fila['lugar']."</td>";
                echo "<td>".$fila['convocador']."</td>";
                echo "<td>".$fila['fecha']."</td>";
                echo "</tr>";
            }
 
        } catch (PDOException $e) {
            print "Huy zona!: " . $e->getMessage() . "<br/>";
            die();
        }
        
        ?>
    </table>
</body>
</html>