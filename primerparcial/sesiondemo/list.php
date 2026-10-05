<?php
require_once "library.php";

$getContacts = getContacts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos Registrados</title>
</head>
<body>
    <h1>Contactos Registrados</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getContacts as $contact): ?>
                <tr>
                    <td><?php echo htmlspecialchars($contact['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($contact['apellido']); ?></td>
                    <td><?php echo htmlspecialchars($contact['telefono']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>