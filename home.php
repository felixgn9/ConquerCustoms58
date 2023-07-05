<?php include ('connection.php'); ?>

<!DOCTYPE html>

<html>

<head>
<title>Conquer customs</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Home</title>
    <meta name="description" content="A blog website about travelling">
    <meta name="author" content="Branice Munaji">

    <link rel="stylesheet" href="styles.css">


    <link rel="stylesheet" href="carousel.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
</head>

<body>

<?php
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}
$session_id = $_SESSION['id'];
$session_query = $conn->query("select * from user_registration where user_id = '$session_id'");
$user_row = $session_query->fetch();
?>

 <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo">CONQUER TUNERS</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="#" class="nav-links">Home</a>
            </li>
            <li>
                <a href="Blog.html" class="nav-links">Blogs</a>
            </li>
            <li>
                <a href="contact.html" class="nav-links">Contact Us</a>
            </li>

            <li>
                <a href="signup.php" class="nav-links">Sign Up</a>
            </li>
            <li>
                <a href="index.php" class="nav-links">Login</a>
            </li>
            <li>
                <a href="log_out_query.php" class="nav-links">Log Out</a>
            </li>
        </ul>
    </nav>

  <div class="container">
  <div class="carousel">
    <div class="carousel__face"><span>Speed and</span></div>
    <div class="carousel__face"><span>Power equals</span></div>
    <div class="carousel__face"><span>Smiles</span></div>
    <div class="carousel__face"><span>Per</span></div>
    <div class="carousel__face"><span>Gallon</span></div>
  </div>
</div> 





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="js/app1.js"></script>
 <script src="js/app.js"></script>

<footer class="footer" style="margin-top: 450px;">
    <p class="footer-content">© 2022 - Conquer customs, All Copyrights Reserved</p>
</footer>

</body>

</html>