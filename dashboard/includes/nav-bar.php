<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="/dashboard/index.php" class="navbar-brand">Time Space</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="/dashboard/index.php" class="nav-link <?php if($active=='dashboard') echo "active" ?>">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="/dashboard/contact.php" class="nav-link <?php if($active=='contact') echo "active" ?>">Contact</a>
          </li>
				</ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Welcome <?php echo $user['name'] ?>
            </a>
            <div class="dropdown-menu">
              <a href="/dashboard/profile.php" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Profile
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="/dashboard/logout.php" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>