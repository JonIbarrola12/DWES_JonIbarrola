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
        $registros = mysqli_query($conexion, "Select * from alumnos");
        if ($registros != null){
            echo "<div class='tablaAlumnos'>";
            echo "<table>";
            echo"<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Apellidos</th>";
            echo "<th>Fecha de Nacimiento</th>";
            echo "<th>Curso</th>";
            echo "<th>Email</th>";
            echo "</tr>";
            foreach ($registros as $item){
                echo "<tr>";
                echo "<td>{$item['nombre']}</td>";
                echo "<td>{$item['apellidos']}</td>";
                echo "<td>{$item['fecha_nacimiento']}</td>";
                echo "<td>{$item['curso']}</td>";
                echo "<td>{$item['email']}</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }
        mysqli_close($conexion)
    ?>
</body>


</html>