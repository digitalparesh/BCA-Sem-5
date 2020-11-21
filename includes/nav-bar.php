<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.php" class="navbar-brand">Time Space</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($active=='home') echo "active"; ?>">
            <a href="/index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item <?php if($active=='about') echo "active"; ?>">
            <a href="/about.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item <?php if($active=='service') echo "active"; ?>">
            <a href="/services.php" class="nav-link">Services</a>
          </li>
          <li class="nav-item <?php if($active=='blog') echo "active"; ?>">
            <a href="/blog.php" class="nav-link">Blog</a>
          </li>
          <li class="nav-item <?php if($active=='contact') echo "active"; ?>">
            <a href="/contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
