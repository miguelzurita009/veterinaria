<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Consulta</title>
</head>
<body>
  <?php include "menu.php"; ?>
<div class="container mt-5 mb-4">
  <h3 class="mb-4 text-primary"><i class="fas fa-notes-medical"></i> Registrar Consulta</h3>
  <form action="../controladores/crearConsulta.php" method="POST">

    
    <div class="mb-3">
      <label for="id_paciente" class="form-label">
        <i class="fas fa-dog"></i> Paciente
      </label>
      
      <select class="form-select" id="pacientesList" name="paciente">
        <option value=""> Seleccione... </option>
        <?php
          include('../modelo/conexion.php');
          $query = "SELECT id_paciente, nombre FROM paciente";
          $res = $conexion->query($query);

          if ($res->num_rows > 0) {
            while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
              echo "<option value='" . $row['id_paciente'] . "'>" . $row['nombre'] . "</option>";
            }
          } else {
            echo "<option value=''>No hay pacientes registrados</option>";
          }
        ?>
      </select>
    </div>

    
    <div class="mb-3">
      <label for="id_veterinario" class="form-label">
        <i class="fas fa-user-md"></i> Médico Veterinario
      </label>
      
      <select class="form-select" id="veterinariosList" name="veterinario">
        <option value=""> Seleccione... </option>
        <?php
          include('../modelo/conexion.php');
          $query = "SELECT id_veterinario, nombre FROM veterinario";
          $res = $conexion->query($query);

          if ($res->num_rows > 0) {
            while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
              echo "<option value='" . $row['id_veterinario'] . "'>" . $row['nombre'] . "</option>";
            }
          } else {
            echo "<option value=''>No hay veterinarios registrados</option>";
          }
        ?>
      </select>
    </div>
    
    <div class="mb-3">
      <label for="fecha_consulta" class="form-label">
        <i class="fas fa-calendar-alt"></i> Fecha de Consulta
      </label>
      <input type="date" class="form-control" id="fecha_consulta" name="fecha_consulta" required>
    </div>

    
    <div class="mb-3">
      <label for="diagnostico" class="form-label">
        <i class="fas fa-stethoscope"></i> Diagnóstico
      </label>
      <textarea class="form-control" id="diagnostico" name="diagnostico" rows="3" required></textarea>
    </div>

    
    <div class="mb-3">
      <label for="tratamiento" class="form-label">
        <i class="fas fa-pills"></i> Tratamiento
      </label>
      <textarea class="form-control" id="tratamiento" name="tratamiento" rows="3" required></textarea>
    </div>

    

    
    <button type="submit" class="btn btn-success">
      <i class="fas fa-save"></i> Guardar Consulta
    </button>

  </form>
</div>

</body>
</html>