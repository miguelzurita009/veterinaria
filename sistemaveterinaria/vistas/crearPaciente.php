<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario Paciente</title>
  <?php include "menu.php"; ?>
</head>
<body>
  <div class="container my-5">
    <h3 class="mb-4 text-primary"><i class="fas fa-dog"></i> Registrar Paciente</h3>
    <form method="POST" action="../controladores/crearPaciente.php">
      <div class="mb-3">
        <label for="nombre" class="form-label"><i class="fas fa-paw me-2 text-secondary"></i>Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required />
      </div>
      <div class="mb-3">
        <label for="especie" class="form-label"><i class="fas fa-kiwi-bird me-2 text-secondary"></i>Especie</label>
        <input type="text" class="form-control" id="especie" name="especie" maxlength="100" required />
      </div>
      <div class="mb-3">
        <label for="raza" class="form-label"><i class="fas fa-dna me-2 text-secondary"></i>Raza</label>
        <input type="text" class="form-control" id="raza" name="raza" maxlength="100" required />
      </div>
      <div class="mb-3">
        <label for="fecha_nac" class="form-label"><i class="fas fa-calendar-alt me-2 text-secondary"></i>Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required />
      </div>

      
      <div class="mb-3">
        <label for="id_dueño" class="form-label"><i class="fas fa-user me-2 text-secondary"></i>Seleccionar Dueño</label>
        
        <select class="form-select" id="dueñosList" name="dueño">
        <option value=""> Seleccione... </option>
          <?php
            include('../modelo/conexion.php');
            $query = "SELECT id_dueño, nombre FROM dueño";
            $res = $conexion->query($query);

            if ($res->num_rows > 0) {
              while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
                echo "<option value='" . $row['id_dueño'] . "'>" . $row['nombre'] . "</option>";
              }
            } else {
              echo "<option>No hay dueños registrados</option>";
            }
          ?>
        </select>
      </div>

      <button type="submit" class="btn btn-success">
        <i class="fas fa-save me-1"></i> Guardar
      </button>
    </form>
  </div>

  
</body>
</html>
