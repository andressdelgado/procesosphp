<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Lugares</title>
    </head>
    <body>
        <h1>Lista de Lugares</h1>
        <?php
            require_once("../../configdb.php");
            //CONSULTA PARA SACAR TODAS LAS FILAS DE LUGARES
            $consulta = "SELECT * FROM lugar";
            $resultado = $conexion->query($consulta);
            if ($resultado->num_rows > 0) {
                echo "<table>";
                /*LOS VALORES DE LA CONSULTA SE GUARDAN EN UN ARRAY ASOCIATIVO, 
                Y MIENTRAS HAYA FILAS, SE GENERARÁ UNA FILA DE UNA TABLA CON LA IP, EL LUGAR, Y LA DESCRIPCION, CADA UNA EN SU RESPECTIVA CELDA    */       
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['ip'] . "</td>";
                    echo "<td>" . $fila['lugar'] . "</td>";
                    echo "<td>" . $fila['descripcion'] . "</td>";
                    echo "<td><a href='procesos.php?ip=" . $fila['ip'] . "&opc=editar'>Editar</a>";
                    echo "<td><a href='procesos.php?ip=" . $fila['ip'] . "&opc=borrar'>Borrar</a>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron resultados.";
            }
            $conexion->close();     
            echo '<a href="../index.html">Volver</a><br>';
        ?>
    </body>
</html>