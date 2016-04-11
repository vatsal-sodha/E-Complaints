<?php
/*$file=fopen("complain_by_user.txt","a+");
$user=$_POST['user_id'];
$complain=$_POST['complain'];
fwrite($file,$user.";");
fwrite($file,$complain."\n");
fclose($file);
echo "<h1>complain is registered succesfully</h1>"."<br>";
*/
$host="localhost";
$user="root";
$password="";
$dbname="user_login";
$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con)
{
	die("Error". mysqli_connect_error());
}
$user_name=isset($_POST['user_name']) ? $_POST['user_name'] :'' ;
$complain=$_POST['complain'];
$query="INSERT INTO `user_login`.`complain` (`name`, `complain`) VALUES ('$user_name', '$complain');";

if(mysqli_query($con,$query))
{
	echo "<h1>complain is succesfully registered</h1>"."<br>";
}
else{
	echo"ERROR:";
}
?>
<html>
<title>Complain</title>
<style>
h1{
font-family:Trebuchet MS;
color:white;
padding-left:825px;
padding-top:100px;
}
h3.e{
font-family:Trebuchet MS;
}
</style>
<body bgcolor="#e74c3c">
<table align="center">
<tr>

<td><h3 class="e"><input type="button" onClick="location.href='logout.html'" value="Logout" name="logout"></h3></td>
<td><h3 class="e"><button type="button" onclick="location.href='http://localhost/new_project/welcome.php'" value="Dashboard">Dashboard</button></h3></td>
</tr>
</html>
</body>