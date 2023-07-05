<?php include ('connection.php'); ?>

<!DOCTYPE html>

<html>
<head>
  <title>Conquer customs</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />

  <title>Sign In</title>
  <meta name="description" content="A custom auto garage" />
  <meta name="author" content="Conquer customs" />


  <link rel="stylesheet" href="styless.css">
  <link rel="stylesheet" href="footer.css">
 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous" />


    <style type=text/css>   
body   
{  
height: 125vh;  
margin-top: 80px;  
padding: 30px;  
background-size: cover;  
font-family: sans-serif;  
}  
header {  
background-color: brown;  
position: fixed;  
left: 0;  
right: 0;  
top: 5px;  
height: 30px;  
display: flex;  
align-items: center;  
box-shadow: 0 0 25px 0 black;  
}  
header * {  
display: inline;  
}  
header li {  
margin: 20px;  
}  
header li a {  
color: white;  
text-decoration: wavy;  
}  
</style>   
</head>

<body>

<header>  
<nav>  
<ul>  
<li>  
<a href="home.php"> Home </a>  
</li>  
<li>  
<a href="Blog.html"> Blogs </a>  
</li>  
<li>  
<a href="contact.html"> Contact </a>  
</li>  
<li> <a href="signup.php"> Sign Up </a>  
</li>  
<li>  
<a href="index.php"> Log In </a>  
</li> 
<li>
    <a href="log_out_query.php" class="nav-links">Log Out</a>
</li> 
</ul>  
</nav>  
</header>  
  
<h2>
	CONQUER CUSTOMS
</h2>

<form method="post" action="log_in_query.php">

<table border="0" cellpadding="10" cellspacing="1" class="tblLogin">
<tr class="tableheader">
<td align="center" colspan="2">Login Page</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" autofocus="autofocus" class="textbox_detail" name="user_name" required></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" autofocus="autofocus" class="textbox_detail" name="password" required></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" class="btn_submit" name="submit" value="Login"></td>
</tr>
</table>
</br>
<table>
<tr class="tablerow">
    <td align="center">Don't have an account? <a href="signup.php"> Sign Up </a></td>
</tr>
</table>


</form>

<footer class="footer">
    <p class="footer-content">© 2022 - Conquer customs, All Copyrights Reserved</p>
</footer>

</body>

</html>