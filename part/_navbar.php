<?php
  echo '  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="cateDrop" data-bs-toggle="dropdown" aria-expanded="false">Course</a>
          <ul class="dropdown-menu" aria-labelledby="cateDrop">
            <li><a class="dropdown-item" href="category.php">Php</a></li>
            <li><a class="dropdown-item" href="category.php">Python</a></li>
            <li><a class="dropdown-item" href="category.php">Javscript</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <a href="login.php" class="btn btn-outline-success">Login</a>
      <a href="singup.php" class="btn btn-outline-success d-inline-block mx-1">Sign in</a>
    </div>
  </div>
</nav>
  
  ';
?>  
