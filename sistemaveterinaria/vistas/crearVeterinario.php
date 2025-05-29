<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Medico</title>
  <?php include "menu.php"; ?>
</head>
<body>
<div class="container mt-5 mb-4">
  <h3 class="mb-4 text-primary"><i class="fas fa-user-md"></i> Registrar Médico</h3>
  <form method="POST" action="../controladores/crearVeterinario.php">
    
    
    <div class="mb-3">
      <label for="nombres" class="form-label">
        <i class="fas fa-user"></i> Nombre
      </label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    
    <div class="mb-3">
      <label for="ci" class="form-label">
         <i class="fas fa-id-card"></i> CI
       </label>
       <input type="number" class="form-control" id="ci" name="ci" required>
    </div>

    
    <div class="mb-3">
      <label for="telefono" class="form-label">
        <i class="fas fa-phone"></i> Teléfono
      </label>
      <input type="number" class="form-control" id="telefono" name="telefono" required minlength="8" maxlength="8">
    </div>

    
    <div class="mb-3">
      <label for="direccion" class="form-label">
        <i class="fas fa-map-marker-alt"></i> Dirección
      </label>
      <input type="text" class="form-control" id="direccion" name="direccion" required>
    </div>

    
    <button type="submit" class="btn btn-success">
      <i class="fas fa-save"></i> Guardar Veterinario
    </button>

  </form>
</div>

</body>
</html>