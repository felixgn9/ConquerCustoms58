<?php 
include('connection.php');
$user_name = $_POST['user_name'];
$password = $_POST['password'];

$query = $conn->query("Select * from user_registration where user_name = '$user_name' and password ='$password' ");
$count = $query->rowcount();
$row = $query->fetch();

if ($count > 0){
session_start();
$_SESSION['id'] = $row['user_id'];
header('location:home.php');
}	else {
?>
<script>
	alert("Incorrect Details. Check your User Name or Password.")
	window.location="index.php";
</script>
<?php 
}
?>