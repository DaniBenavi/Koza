<?php require_once "navbar.php" ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" href="principal.php">Menu
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li>
          <a class="nav-link active" href="principal.php">
            <p class="fs-5"><strong>Menu</strong> </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Productos</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="new_producto.php">Nuevo Producto</a></li>
            <li><a class="dropdown-item" href="admin_productos.php">Administracion</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_users.php">
            <p class="fs-5"><strong>Usuarios</strong> </p>
          </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
