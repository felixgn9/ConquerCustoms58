<?php include ('connection.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Conquer customs</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />

  <title>Sign Up</title>
  <meta name="description" content="A blog website about travelling" />
  <meta name="author" content="Branice Munaji" />

  <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
      <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo">CONQUER CUSTOMS</a>
    <ul class="main-nav" id="js-menu">
      <li>
        <a href="home.php" class="nav-links">Home</a>
      </li>
      <li>
        <a href="Blog.html" class="nav-links">Blogs</a>
      </li>
      <li>
        <a href="contact.html" class="nav-links">Contact Us</a>
      </li>

      <li>
        <a href="#" class="nav-links">Sign Up</a>
      </li>
      <li>
        <a href="index.php" class="nav-links">Login</a>
      </li>
      <li>
          <a href="log_out_query.php" class="nav-links">Log Out</a>
      </li>
    </ul>
  </nav>

  <div class="register">
    <h1>Register</h1>
    <form action="signup.php" method="post" autocomplete="off">
      <label for="username">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="username" placeholder="Username" id="username" required />
      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required />
      <label for="email">
        <i class="fas fa-envelope"></i>
      </label>
      <input type="email" name="email" placeholder="Email" id="email" required />
      <input type="submit" value="Register" />
    </form>
  </div>

  <footer class="footer" style="color: white;">
    <p class="footer-content">© 2022 - Conquer customs, All Copyrights Reserved</p>
  </footer>
</body>

</html>