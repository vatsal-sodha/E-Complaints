<?php

session_start();
if(isset($_POST['login'])){
	$user_name=$_POST['user_name'];
	$pass=$_POST['password'];
	$host="localhost";
$user="root";
$password="";$db_name="user_login";
$con=mysqli_connect($host,$user,$password,$db_name);

if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}
	/*$query="SELECT * FROM user_details WHERE user_name=$user_name AND password=$pass";
	$result=mysqli_query($con,$query);
	if(($result))
	{
		echo "<h1>You have succesfuly logged in!</h1>"."<br>";
		$_SESSION['user_name']=$user_name;
	}
	else{
		echo "<script type='text/javascript'>alert('Incorrect Details');window.location.href = 'user_login.html';</script>";
		mysqli_close($con);
	exit();
	}*/
	
$flag=0;	
$query1="SELECT * FROM user_details WHERE user_name='$user_name' AND password='$pass'";
$result1=mysqli_query($con,$query1);
$numrows = mysqli_num_rows($result1);

if($numrows==1){
	$_SESSION['user_name']=$user_name;
header("location: welcome.php");
}
else{
	header("location: user_login.html");
}
	/*while($row=mysqli_fetch_array($result1))
	{
		if($row[0]==$user_name && $row["password"]==$pass) 
		{
			$flag=1;
			break;
		}
	}*/

/*if($flag==0){
}*/


}
?>