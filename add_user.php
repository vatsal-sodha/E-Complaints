<html>
<style>
h1{
font-family:Trebuchet MS;
color:white;
padding-left:40px;
padding-top:50px;
}
</style>
<?php


$user_name=$_POST['user_name'];
$pass=$_POST['password'];
$id=$_POST['user_id'];
$email=$_POST['email'];

$host="localhost";
$user="root";
$password="";$db_name="user_login";
$con=mysqli_connect($host,$user,$password,$db_name);

if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

$flag=0;
$query1="SELECT user_name FROM user_details";
if($result1=mysqli_query($con,$query1)){
	while($row=mysqli_fetch_row($result1))
	{
		if($row[0]==$user_name)
		{
			$flag=1;
			break;
		}
	}
}
if($flag==0){
$query="INSERT INTO `user_login`.`user_details` (`user_name`, `password`, `user_id`, `email`) VALUES ('$user_name', '$pass', '$id','$email');";
if(mysqli_query($con,$query))
{
	 echo "<h1><font color='white'>New user added successfully</font></h1>";
} else {
    echo "Error: ";
}
}
else{
echo "<script type='text/javascript'>alert('User already exists');window.location.href = 'add_user.html';</script>";
	mysqli_close($con);
	exit();
}
mysqli_close($con);

?>
<head>
<style>
body{
font-family:Trebuchet MS;

padding-left:825px;
padding-top:200px;
}

p{
padding-left:40px;
padding-top:40px;
}
</style>
</head>
<body bgcolor="#27ae60">
<h1><font color="white">Congrats!</font></h1>
<h2><font color="white"></font></h2>
<p>
<button value="home" onclick='location.href="add_user.html"' >Add Another</button>
<input type="button" onClick="location.href='logout_admin.html'" value="Logout" name="logout">
<button type="button" onclick="location.href='http://localhost/new_project/admin_login.php'" value="Dashboard">Dashboard</button>
</p>
</body>
</html>