<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Miembros Registrados - Comunidad Gamedev</title>
</head>
<body>

    <h2>Listado de Miembros Registrados</h2>

    <?php
    if (!isset($_SESSION['registros']) || empty($_SESSION['registros'])) {
        echo '<p>No hay registros almacenados en la sesión todavía.</p>';
    } else {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Nombre / Alias</th>';
        echo '<th>Correo</th>';
        echo '<th>Teléfono</th>';
        echo '<th>Especialización</th>';
        echo '<th>F. Nacimiento</th>';
        echo '<th>Motor</th>';
        echo '<th>Portafolio</th>';
        echo '<th>Formato</th>';
        echo '</tr>';

        foreach ($_SESSION['registros'] as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['nombre'] . '</td>';
            echo '<td>' . $registro['correo'] . '</td>';
            echo '<td>' . $registro['telefono'] . '</td>';
            echo '<td>' . $registro['especializacion'] . '</td>';
            echo '<td>' . $registro['fecha_nacimiento'] . '</td>';
            echo '<td>' . $registro['motor'] . '</td>';
            echo '<td><a href="' . $registro['portafolio'] . '" target="_blank">Ver enlace</a></td>';
            echo '<td>' . $registro['formato'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>

    <br>
    <a href="Registro.php">Registrar otro miembro</a>

</body>
</html>