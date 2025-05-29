<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php
     ///require_once "referencias.php";
     include "referencias.php";
   ?>
</head>
<body>

<header class="py-3"><!--bg-dark text-white-->
    <div class="container d-flex justify-content-start align-items-center">
      <!--<i class="fas fa-star fa-2x me-2 text-info"></i>-->
      <h4 class="mb-0">SISTEMA VETERINARIA</h4>
    </div>
  </header>

 
<nav class="navbar navbar-expand-lg navbar-primary bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav">
          <li class="nav-item">
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pacientes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="crearPaciente.php">Registro de Paciente</a></li>
                  <li><a class="dropdown-item" href="listaPacientes.php">Lista de Pacientes</a></li>
                </ul>
              </li>
          </li>
          <li class="nav-item">
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dueños
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="crearDueno.php">Registro de Dueño</a></li>
                  <li><a class="dropdown-item" href="listaDueno.php">Lista de Dueño</a></li>
                </ul>
              </li>
          </li>
          <li class="nav-item">
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Consultas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="crearConsulta.php">Registro de Consultas</a></li>
                  <li><a class="dropdown-item" href="listaConsulta.php">Lista de Consultas</a></li>
                </ul>
              </li>
          </li>
          <li class="nav-item">
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Medicos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="crearVeterinario.php">Registro de Medico</a></li>
                  <li><a class="dropdown-item" href="listaVeterinario.php">Lista de Medicos</a></li>
                </ul>
              </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      
</body>
</html>