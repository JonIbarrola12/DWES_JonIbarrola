<html>
    <head>
        <title>Pagina Alumnos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="respuesta">
        <?php
            $conexion = mysqli_connect("localhost","alumno1","alumno1","formulario_practica")
            or die("Problemas al establecer conexion");
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $fecha = $_POST['fecha'];
            $curso = $_POST['curso'];
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];


            $consulta = mysqli_query($conexion,"select count(*) as total from alumnos where curso = '$curso'") or die ("Problemas al acceder a la tabla alumnos");

            $fila = mysqli_fetch_assoc($consulta);
            $cont_registros = $fila['total'];
            if ($cont_registros < 25 ){
                $insert = mysqli_query($conexion,"insert into alumnos (nombre,apellidos,fecha_nacimiento,curso,email,contraseña) values ('$nombre','$apellidos','$fecha','$curso','$email','$contraseña')") or die ("Problemas al insertar registros en la tabla alumnos");
                echo "<p class='mensaje'>Alumno <b>$nombre</b> insertado correctamente </p>";
            }else{
                echo "<p class='mensaje'>Se ha alcanzado el limite de alumnos en el curso $curso ($cont_registros) </p>";
            }
            mysqli_close($conexion);
        ?>
        <br>
        <a href="/PracticaAlumnado/formulario.html" class="botonVolver">Volver</a>
        </div>
    </body>

</html>




<!-- $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $curso_num = $_POST['curso'];
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']); -->