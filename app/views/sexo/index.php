<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Sexos</title>
    <link rel="stylesheet" href="/sexo/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Listado de Sexos</h1>
<a href="http://educaysoft.org/sexo/app/views/sexo/create.php"><button>Agregar Sexo</button></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sexos as $sexo): ?>
                <tr>
                    <td><?php echo $sexo['id']; ?></td>
                    <td><?php echo $sexo['nombre']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $sexo['id']; ?>"><button>Editar</button></a>
                        <a href="delete.php?id=<?php echo $sexo['id']; ?>"><button>Eliminar</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="/sexo/public/js/script.js"></script>
</body>
</html>
