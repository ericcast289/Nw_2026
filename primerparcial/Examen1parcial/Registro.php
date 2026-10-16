<?php
session_start();

if (!isset($_SESSION['registros'])) {
    $_SESSION['registros'] = array();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $especializacion = isset($_POST['especializacion']) ? $_POST['especializacion'] : array();
    $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';
    $motor = isset($_POST['motor']) ? $_POST['motor'] : '';
    $portafolio = isset($_POST['portafolio']) ? trim($_POST['portafolio']) : '';
    $formato = isset($_POST['formato']) ? $_POST['formato'] : '';

    if ($nombre == '' || $correo == '' || $password == '' || $telefono == '' || empty($especializacion) || $fecha_nacimiento == '' || $motor == '' || $portafolio == '' || $formato == '') {
        $error = "Por favor, complete todos los campos obligatorios del formulario.";
    } else {
        $nuevo_registro = array(
            'nombre' => $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
            'especializacion' => implode(', ', $especializacion),
            'fecha_nacimiento' => $fecha_nacimiento,
            'motor' => $motor,
            'portafolio' => $portafolio,
            'formato' => $formato
        );

        $_SESSION['registros'][] = $nuevo_registro;

        header('Location: Lista.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Comunidad de Desarrollo de Videojuegos</title>
</head>
<body>

    <h2>Registro a la Comunidad Gamedev</h2>

    <?php
    if ($error != "") {
        echo '<p style="color: red;">' . $error . '</p>';
    }
    ?>

    <form method="POST" action="Registro.php">
        <p>
            <label for="nombre">Nombre completo o alias:</label><br>
            <input type="text" id="nombre" name="nombre">
        </p>

        <p>
            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo">
        </p>

        <p>
            <label for="password">Contraseña segura:</label><br>
            <input type="password" id="password" name="password">
        </p>

        <p>
            <label for="telefono">Número de teléfono:</label><br>
            <input type="text" id="telefono" name="telefono">
        </p>

        <p>
            <label>Área de especialización:</label><br>
            <input type="checkbox" name="especializacion[]" value="Programación de juegos"> Programación de juegos<br>
            <input type="checkbox" name="especializacion[]" value="Diseño de niveles"> Diseño de niveles<br>
            <input type="checkbox" name="especializacion[]" value="Arte y animación"> Arte y animación<br>
            <input type="checkbox" name="especializacion[]" value="Música y sonido"> Música y sonido<br>
            <input type="checkbox" name="especializacion[]" value="Narrativa y guion"> Narrativa y guion
        </p>

        <p>
            <label for="fecha_nacimiento">Fecha de Nacimiento (Game Jams):</label><br>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
        </p>

        <p>
            <label for="motor">Motor de juego que utiliza:</label><br>
            <select id="motor" name="motor">
                <option value="">Seleccione una opción</option>
                <option value="Unity">Unity</option>
                <option value="Unreal Engine">Unreal Engine</option>
                <option value="Godot">Godot</option>
                <option value="GameMaker">GameMaker</option>
                <option value="Otro">Otro</option>
            </select>
        </p>

        <p>
            <label for="portafolio">URL de portafolio o proyecto publicado:</label><br>
            <input type="url" id="portafolio" name="portafolio">
        </p>

        <p>
            <label>Formato de participación preferido:</label><br>
            <input type="radio" name="formato" value="solo"> Solo<br>
            <input type="radio" name="formato" value="en equipo de 2-4 personas"> En equipo de 2-4 personas<br>
            <input type="radio" name="formato" value="en equipo grande"> En equipo grande<br>
            <input type="radio" name="formato" value="sin preferencia"> Sin preferencia
        </p>

        <p>
            <button type="submit">Unirme a la Comunidad</button>
        </p>
    </form>

</body>
</html>