<html>
<head>
    <title>Formulario de Alumnos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1>
        Formulario de Gestion de Alumnos 
    </h1>
    <br>
    <div class="formulario">
        <form method="post" action="php/index.php">
        <div class="itemForm">
            <label>Nombre:</label>
            <input class="textInput" type="text" name="nombre" required>
            <br>
        </div>
        <div class="itemForm">
            <label>Apellidos:</label>
            <input class="textInput" type="text" name="apellidos" required>
            <br>
        </div>
        <div class="itemForm">
            <label>Fecha de Nacimiento:</label>
            <input class="textInput" type="date" name="fecha" required>
            <br>
        </div>
        <div class="itemForm">
            <label>Curso:</label>
            <div class="cursos">
                <input type="radio" name="curso" value="1">
                    1º ESO
                <br>
                <input type="radio" name="curso" value="2">
                    2º ESO
                <br>
                <input type="radio" name="curso" value="3">
                    3º ESO
                <br>
                <input type="radio" name="curso" value="4">
                    4º ESO
                <br>
            </div>
        </div>
        
        <div class="itemForm">
            <label>Email de Educamos:</label>
                <input class="textInput" type="text" name="email" required>
                <br>
        </div>
        <div class="itemForm">
            <label>Contraseña de Educamos:</label>
            <input class="textInput" type="password" name="contraseña" required>
            <br>
        </div>
        <div class="botonEnviar">
            <input class="enviar" type="submit" name="enviar">
        </div>
    </form>
    </div>
    <br>
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
        }
        mysqli_close($conexion)
    ?>
</body>


</html>