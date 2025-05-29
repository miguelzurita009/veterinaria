<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario Veterinario</title>
  <?php include "menu.php"; ?>
</head>
<body>
  <div class="container my-5">
    <h3 class="mb-4 text-primary"><i class="fas fa-user-md"></i> Editar Veterinario</h3>

    <?php
      $id = $_REQUEST['ide'];
      include('../modelo/conexion.php');
      $query = "SELECT * FROM veterinario WHERE id_veterinario='$id'";
      $res = $conexion->query($query);
      $row = $res->fetch_assoc();
    ?>

    <form method="POST" action="../controladores/editarVeterinario.php?ide=<?php echo $row['id_veterinario']; ?>">
      <div class="mb-3">
        <label for="nombre" class="form-label"><i class="fas fa-user me-2 text-secondary"></i>Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required value="<?php echo $row['nombre']; ?>"/>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label"><i class="fas fa-phone me-2 text-secondary"></i>Teléfono</label>
        <input type="number" class="form-control" id="telefono" name="telefono" maxlength="8" required value="<?php echo $row['telefono']; ?>"/>
      </div>
      <div class="mb-3">
        <label for="direccion" class="form-label"><i class="fas fa-map-marker-alt me-2 text-secondary"></i>Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" maxlength="100" required value="<?php echo $row['direccion']; ?>"/>
      </div>
      <div class="mb-3">
        <label for="ci" class="form-label"><i class="fas fa-id-card me-2 text-secondary"></i>CI</label>
        <input type="number" class="form-control" id="ci" name="ci" maxlength="10" required value="<?php echo $row['ci']; ?>"/>
      </div>

      <button type="submit" class="btn btn-success">
        <i class="fas fa-save me-1"></i> Guardar Cambios
      </button>
    </form>
  </div>
</body>
</html>
