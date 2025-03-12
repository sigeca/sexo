<form action="edit.php?id=<?php echo $row['id']; ?>" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>" required>
    <input type="submit" value="Actualizar">
</form>

