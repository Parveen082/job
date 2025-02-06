<header class="main-header">

<!-- Logo -->
<a href="index.php" class="navbar-brand d-flex align-items-center">
  <!-- Mini logo for sidebar (50x50 pixels) -->
  <span class="d-none d-lg-inline-block logo-mini">
    <b>J</b>P
  </span>
  <!-- Logo for regular state and mobile devices -->
  <span class="logo-lg ms-2">
    <b class="text-primary">Job</b> <span class="text-warning">Portal</span>
  </span>
</a>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- Toggler for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="jobs.php">Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <?php if (empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sign-up.php">Sign Up</a>
          </li>
        <?php } else { ?>
          <?php if (isset($_SESSION['id_user'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="user/index.php">Dashboard</a>
            </li>
          <?php } else if (isset($_SESSION['id_company'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="company/index.php">Dashboard</a>
              </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

</header>