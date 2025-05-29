<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de Pacientes</title>
 
</head>
<body>

<?php include "menu.php"; ?>

<div class="container mt-4">
  <h3><i class="fas fa-paw"></i> Lista de Pacientes</h3>
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalPaciente">
    <i class="fas fa-plus"></i> Agregar Paciente
  </button>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Especie</th>
        <th>Raza</th>
        <th>Fecha Nac.</th>
        <th>ID Dueño</th>
        <th colspan="2" class="text-center">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../modelo/conexion.php');
        $query = "SELECT id_paciente, nombre, especie, raza, fecha_nac, id_dueño FROM paciente";
        $res = $conexion->query($query);

        while($row = $res->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $row['id_paciente']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['especie']; ?></td>
          <td><?php echo $row['raza']; ?></td>
          <td><?php echo $row['fecha_nac']; ?></td>
          <td><?php echo $row['id_dueño']; ?></td>
          <td class="text-center">
            <a class="btn btn-danger" href="../controladores/eliminarPaciente.php?ide=<?php echo $row['id_paciente']; ?>">
              <i class="fas fa-trash"></i> Eliminar
            </a>
          </td>
          <td class="text-center">
            <a class="btn btn-success" href="../vistas/editarFrmPaciente.php?ide=<?php echo $row['id_paciente']; ?>">
              <i class="fas fa-edit"></i> Actualizar
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalPaciente" tabindex="-1" aria-labelledby="modalPacienteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="../controladores/crearPaciente.php">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPacienteLabel"><i class="fas fa-paw"></i> Nuevo Paciente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-2">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
          </div>

          <div class="form-group mb-2">
            <label>Especie</label>
            <input type="text" class="form-control" name="especie" required>
          </div>

          <div class="form-group mb-2">
            <label>Raza</label>
            <input type="text" class="form-control" name="raza" required>
          </div>

          <div class="form-group mb-2">
            <label>Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac" required>
          </div>

          <div class="form-group mb-2">
            <label>Dueño</label>
            <select name="dueño" class="form-select" required>
              <option value="">Seleccionar...</option>
              <?php
                include('../modelo/conexion.php');
                $query = "SELECT id_dueño, nombre FROM dueño";
                $res = $conexion->query($query);

                if ($res->num_rows > 0) {
                  while ($row = $res->fetch_assoc()) {
                    echo "<option value='".$row['id_dueño']."'>".$row['nombre']."</option>";
                  }
                } else {
                  echo "<option value=''>No hay dueños registrados</option>";
                }
              ?>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
