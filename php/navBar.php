<?php 
session_id("superVisor");
session_start();   
if (!isset($_SESSION['set'])){
    header('location: index.php');
    exit();
}
?>
<nav class="navbar bg-dark navbar-dark  navbar-expand-lg gdepNav">
  <div class="container-fluid">
    <a class="navbar-brand fs-4" href="home.php">Gestion Departement</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mb-3 mt-3" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-5" aria-current="page" href="supervisor.php">SuperVisor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="#">Modules</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Eleves
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Sections</a></li>
            <li><a class="dropdown-item" href="#">Search Eleve</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="#">Notes</a>
        </li>
        
      </ul>
      <form class="d-flex" role="logout" action="php/decon.php">
        <button class="btn btn-secondary" type="submit">Logout</button>
      </form>

    </div>
  </div>
</nav>