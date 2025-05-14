<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contactos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center mb-4">Agenda de Contactos</h2>
    <a href="index.php?action=crear" class="btn btn-success mb-3">Agregar Nuevo</a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nac.</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Número</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($contactos as $contacto): ?>
            <tr>
                <td><?= $contacto['id'] ?></td>
                <td><?= $contacto['nombre'] ?></td>
                <td><?= $contacto['apellido'] ?></td>
                <td><?= $contacto['fecha_nac'] ?></td>
                <td><?= $contacto['correo'] ?></td>
                <td><?= $contacto['direccion'] ?></td>
                <td><?= $contacto['numero'] ?></td>
                <td>
                    <a href="index.php?action=editar&id=<?= $contacto['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="index.php?action=eliminar&id=<?= $contacto['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este contacto?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
