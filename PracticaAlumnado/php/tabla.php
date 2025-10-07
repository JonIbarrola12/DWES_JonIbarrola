<html>
<head>
    <title>Tabla de Alumnos</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","alumno1","alumno1","formulario_practica")
            or die("Problemas al establecer conexion");
        $registros = mysqli_query($conexion, "Select * from alumnos order by curso, nombre");
        if (mysqli_num_rows($registros) > 0){
            echo "<div>";
            echo "<table class='tablaAlumnos'>";
            echo"<tr>";
            echo "<th class='thAlumnos'>Nombre</th>";
            echo "<th class='thAlumnos'>Apellidos</th>";
            echo "<th class='thAlumnos'>Fecha de Nacimiento</th>";
            echo "<th class='thAlumnos'>Curso</th>";
            echo "<th class='thAlumnos'>Email</th>";
            echo "</tr>";
            foreach ($registros as $item){
                echo "<tr>";
                echo "<td class='tdAlumnos'>{$item['nombre']}</td>";
                echo "<td class='tdAlumnos'>{$item['apellidos']}</td>";
                echo "<td class='tdAlumnos'>{$item['fecha_nacimiento']}</td>";
                echo "<td class='tdAlumnos'>{$item['curso']}</td>";
                echo "<td class='tdAlumnos'>{$item['email']}</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }else{
            echo "<p class='mensaje'>No hay Alumnos</p>";
        }
        mysqli_close($conexion)
    ?>
    <br>
    <div class="divBotones">
        <a class="botonVolver" href="../formulario.html">Volver</a>
    </div>
</body>
</html>