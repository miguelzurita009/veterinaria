<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario Dueño de Mascota</title>
  
  <?php include "menu.php"; ?>
</head>
<body>
  <div class="container my-5">
    <h3 class="mb-4 text-primary"><i class="fas fa-user"></i> Registrar Dueño de Mascota</h3>
    <form method="POST" action="../controladores/crearDueno.php">
      <div class="mb-3">
        <label for="nombres" class="form-label"><i class="fas fa-user-tag me-2 text-secondary"></i>Nombres</label>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required />
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label"><i class="fas fa-phone me-2 text-secondary"></i>Teléfono</label>
        <input type="number" class="form-control" id="telefono" name="telefono" min="10000000" max="99999999" required />
      </div>
      <div class="mb-3">
        <label for="direccion" class="form-label"><i class="fas fa-map-marker-alt me-2 text-secondary"></i>Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" maxlength="100" required />
      </div>
      <button type="submit" class="btn btn-success">
        <i class="fas fa-save me-1"></i> Guardar
      </button>
    </form>
  </div>

</body>
</html>
