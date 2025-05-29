<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Consulta</title>
  <?php include "menu.php"; ?>
</head>
<body>
  <div class="container my-5">
    <h3 class="mb-4 text-primary"><i class="fas fa-notes-medical"></i> Editar Consulta</h3>

    <?php
      $id = $_REQUEST['ide'];
      include('../modelo/conexion.php');
      $query = "SELECT * FROM consulta WHERE id_consulta = '$id'";
      $res = $conexion->query($query);
      $row = $res->fetch_assoc();
    ?>

    <form method="POST" action="../controladores/editarConsulta.php?ide=<?php echo $row['id_consulta']; ?>">
      <div class="mb-3">
        <label for="fecha_consulta" class="form-label"><i class="fas fa-calendar-alt me-2 text-secondary"></i>Fecha de Consulta</label>
        <input type="text" class="form-control" id="fecha_consulta" name="fecha_consulta" maxlength="10" required value="<?php echo $row['fecha_consulta']; ?>"/>
      </div>

      <div class="mb-3">
        <label for="diagnostico" class="form-label"><i class="fas fa-stethoscope me-2 text-secondary"></i>Diagnóstico</label>
        <input type="text" class="form-control" id="diagnostico" name="diagnostico" maxlength="400" required value="<?php echo $row['diagnostico']; ?>"/>
      </div>

      <div class="mb-3">
        <label for="tratamiento" class="form-label"><i class="fas fa-pills me-2 text-secondary"></i>Tratamiento</label>
        <input type="text" class="form-control" id="tratamiento" name="tratamiento" maxlength="400" required value="<?php echo $row['tratamiento']; ?>"/>
      </div>

      <!-- Paciente con SELECT -->
      <div class="mb-3">
        <label for="id_paciente" class="form-label"><i class="fas fa-user-injured me-2 text-secondary"></i>Seleccionar Paciente</label>
        <select class="form-select" id="id_paciente" name="id_paciente" required>
          <option value="<?php echo $row['id_paciente']; ?>">Seleccione...</option>
          <?php
            $consultaPacientes = "SELECT id_paciente, nombre FROM paciente";
            $resPacientes = $conexion->query($consultaPacientes);
            if ($resPacientes->num_rows > 0) {
              while ($pac = $resPacientes->fetch_assoc()) {
                echo "<option value='" . $pac['id_paciente'] . "'>" . $pac['nombre'] . "</option>";
              }
            } else {
              echo "<option>No hay pacientes registrados</option>";
            }
          ?>
        </select>
      </div>

      <!-- Veterinario con SELECT -->
      <div class="mb-3">
        <label for="id_veterinario" class="form-label"><i class="fas fa-user-md me-2 text-secondary"></i>Seleccionar Veterinario</label>
        <select class="form-select" id="id_veterinario" name="id_veterinario" required>
          <option value="<?php echo $row['id_veterinario']; ?>">Seleccione...</option>
          <?php
            $consultaVet = "SELECT id_veterinario, nombre FROM veterinario";
            $resVet = $conexion->query($consultaVet);
            if ($resVet->num_rows > 0) {
              while ($vet = $resVet->fetch_assoc()) {
                echo "<option value='" . $vet['id_veterinario'] . "'>" . $vet['nombre'] . "</option>";
              }
            } else {
              echo "<option>No hay veterinarios registrados</option>";
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
