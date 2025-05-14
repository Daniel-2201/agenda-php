<?php
$esEditar = isset($contacto);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $esEditar ? 'Editar' : 'Crear' ?> Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4"><?= $esEditar ? 'Editar' : 'Nuevo' ?> Contacto</h2>
    <form method="post" action="index.php?action=<?= $esEditar ? 'actualizar' : 'guardar' ?>">
        <?php if ($esEditar): ?>
            <input type="hidden" name="id" value="<?= $contacto['id'] ?>">
        <?php endif; ?>

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?= $esEditar ? $contacto['nombre'] : '' ?>" required>
        </div>
        <div class="mb-3">
            <label>Apellido</label>
            <input type="text" name="apellido" class="form-control" value="<?= $esEditar ? $contacto['apellido'] : '' ?>" required>
        </div>
        <div class="mb-3">
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha_nac" class="form-control" value="<?= $esEditar ? $contacto['fecha_nac'] : '' ?>" required>
        </div>
        <div class="mb-3">
            <label>Correo</label>
            <input type="email" name="correo" class="form-control" value="<?= $esEditar ? $contacto['correo'] : '' ?>" required>
        </div>
        <div class="mb-3">
            <label>Dirección</label>
            <input type="text" name="direccion" class="form-control" value="<?= $esEditar ? $contacto['direccion'] : '' ?>" required>
        </div>
        <div class="mb-3">
            <label>Número</label>
            <input type="text" name="numero" class="form-control" value="<?= $esEditar ? $contacto['numero'] : '' ?>" required>
        </div>

        <button type="submit" class="btn btn-primary"><?= $esEditar ? 'Actualizar' : 'Guardar' ?></button>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</div>
</body>
</html>
