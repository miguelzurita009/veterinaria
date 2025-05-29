<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de Veterinarios</title>
</head>
<body>

<?php include "menu.php"; ?>

<div class="container mt-4">
  <h3><i class="fas fa-user-md"></i> Lista de Veterinarios</h3>
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalVeterinario">
    <i class="fas fa-plus"></i> Agregar Veterinario
  </button>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>CI</th>
        <th colspan="2" class="text-center">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../modelo/conexion.php');
        $query = "SELECT id_veterinario, nombre, telefono, direccion, ci FROM veterinario";
        $res = $conexion->query($query);

        while($row = $res->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $row['id_veterinario']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['telefono']; ?></td>
          <td><?php echo $row['direccion']; ?></td>
          <td><?php echo $row['ci']; ?></td>
          <td class="text-center">
            <a class="btn btn-danger" href="../controladores/eliminarVeterinario.php?ide=<?php echo $row['id_veterinario']; ?>">
              <i class="fas fa-trash"></i> Eliminar
            </a>
          </td>
          <td class="text-center">
            <a class="btn btn-success" href="../vistas/editarFrmVeterinario.php?ide=<?php echo $row['id_veterinario']; ?>">
              <i class="fas fa-edit"></i> Actualizar
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalVeterinario" tabindex="-1" aria-labelledby="modalVeterinarioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="../controladores/crearVeterinario.php">
        <div class="modal-header">
          <h5 class="modal-title" id="modalVeterinarioLabel"><i class="fas fa-user-md"></i> Nuevo Veterinario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-2">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
          </div>

          <div class="form-group mb-2">
            <label>CI</label>
            <input type="number" class="form-control" name="ci" required>
          </div>

          <div class="form-group mb-2">
            <label>Teléfono</label>
            <input type="number" class="form-control" name="telefono" required>
          </div>

          <div class="form-group mb-2">
            <label>Dirección</label>
            <input type="text" class="form-control" name="direccion" required>
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
