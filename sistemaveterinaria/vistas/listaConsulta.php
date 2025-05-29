<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de Consultas</title>

 
</head>
<body>

<?php include "menu.php"; ?>

<div class="container mt-4">
  <h3><i class="fas fa-notes-medical"></i> Lista de Consultas</h3>

  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalConsulta">
    <i class="fas fa-plus"></i> Agregar Consulta
  </button>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>Diagnóstico</th>
        <th>Tratamiento</th>
        <th>ID Paciente</th>
        <th>ID Veterinario</th>
        <th colspan="2" class="text-center">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../modelo/conexion.php');
        $query = "SELECT * FROM consulta";
        $res = $conexion->query($query);

        while ($row = $res->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $row['id_consulta']; ?></td>
        <td><?php echo $row['fecha_consulta']; ?></td>
        <td><?php echo $row['diagnostico']; ?></td>
        <td><?php echo $row['tratamiento']; ?></td>
        <td><?php echo $row['id_paciente']; ?></td>
        <td><?php echo $row['id_veterinario']; ?></td>
        <td class="text-center">
          <a class="btn btn-danger" href="../controladores/eliminarConsulta.php?ide=<?php echo $row['id_consulta']; ?>">
            <i class="fas fa-trash"></i> Eliminar
          </a>
        </td>
        <td class="text-center">
          <a class="btn btn-success" href="../vistas/editarFrmConsulta.php?ide=<?php echo $row['id_consulta']; ?>">
            <i class="fas fa-edit"></i> Actualizar
          </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalConsulta" tabindex="-1" aria-labelledby="modalConsultaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="../controladores/crearConsulta.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="modalConsultaLabel">Nueva Consulta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">

          
          <div class="mb-3">
            <label for="id_paciente" class="form-label">
              <i class="fas fa-dog"></i> Paciente
            </label>
            <select class="form-select" id="pacientesList" name="paciente" required>
              <option value="">Seleccione...</option>
              <?php
                include('../modelo/conexion.php');
                $query = "SELECT id_paciente, nombre FROM paciente";
                $res = $conexion->query($query);
                while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
                  echo "<option value='{$row['id_paciente']}'>{$row['nombre']}</option>";
                }
              ?>
            </select>
          </div>

          
          <div class="mb-3">
            <label for="id_veterinario" class="form-label">
              <i class="fas fa-user-md"></i> Médico Veterinario
            </label>
            <select class="form-select" id="veterinariosList" name="veterinario" required>
              <option value="">Seleccione...</option>
              <?php
                include('../modelo/conexion.php');
                $query = "SELECT id_veterinario, nombre FROM veterinario";
                $res = $conexion->query($query);
                while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
                  echo "<option value='{$row['id_veterinario']}'>{$row['nombre']}</option>";
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

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar
          </button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cancelar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>
