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

$name=$_POST['name'];
$id=$_POST['id1'];
$host="localhost";
$user="root";
$password="";$db_name="policestation";
$con=mysqli_connect($host,$user,$password,$db_name);

if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}
$flag=0;
$query1="SELECT name FROM police_station";
if($result1=mysqli_query($con,$query1)){
	while($row=mysqli_fetch_row($result1))
	{
		if($row[0]==$name)
		{
			$flag=1;
			break;
		}
	}
}
if($flag==0){
$query="INSERT INTO `policestation`.`police_station` (`name`, `id`) VALUES ('$name', '$id')";
if(mysqli_query($con,$query))
{
	 echo "<h1><font color='white'>New  Station added successfully</font></h1>";
} else {
    echo "Error: ";
}
}
else{
echo "<script type='text/javascript'>alert('Station already exists.Enter unique name');window.location.href = 'add_police_station.html';</script>";
	mysqli_close($con);
	exit();
}
mysqli_close($con);



?>


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
<h1><font color="white">Congrats!</font></h1>
<h2><font color="white">
</font>
<html>
<body bgcolor="#27ae60">

<button value="home" onclick='location.href="add_police_station.html"' >Add Another</button>
<input type="button" onClick="location.href='logout_admin.html'" value="Logout" name="logout">&nbsp &nbsp
<button type="button" onclick="location.href='http://localhost/new_project/admin_login.php'" value="Dashboard">Dashboard</button>
</body>
</html>