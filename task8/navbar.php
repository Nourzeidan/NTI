<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Document</a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <?php if (isset($_SESSION['username'])): ?>
          <li class="nav-item me-3 text-white">
            Hello, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger btn-sm" href="logout.php">Logout</a>
          </li>
        <?php else: ?>
         <li class="nav-item me-2">
            <a class="btn btn-outline-light btn-sm" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary btn-sm" href="register.php">Register</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>