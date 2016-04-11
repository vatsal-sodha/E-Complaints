<html>
<head>
<script>
function validateForm() {
    //var x = document.forms["report"]["user_id"].value;
	var el = document.getElementById('complain');
	  var value = el.value;

	//var police_station_id = document.getElementById("complain");
    /*if (x == null || x == "") {
        alert("id must be filled out");
        return false;
}*/
  
      if (value == null || value === '' || value.indexOf('\n') > 0) {
        alert("Please Write Problem Description");
        return false;
    }

   /* else if ($.trim(police_station_id) == '' || police_station_id==NULL) {
        
    }*/ else {
        return true;
    		
    }
}

</script>
<title>Report Page</title>
<style>

table{
font-family:Trebuchet MS;
color:white;
padding-left:850px;
padding-top:200px;
}
</style>
<body bgcolor="#34495e">
<form name="police_station" action="http://localhost/new_project/complain_by_police.php" method="post">
<table border=0>
<tr>
<td>Police Station Name</td>
<td>
<?php 
$host="localhost";
$user="root";
$password="";$db_name="policestation";
$con=mysqli_connect($host,$user,$password,$db_name);

if(!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}
$query="SELECT * FROM police_station";
$result=mysqli_query($con,$query);
echo '<select name="police_station">';

while($row=mysqli_fetch_row($result))
{
echo "<option value='".$row[0]."'>".$row[0]."</option>";
//echo $row[0];
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td>Your Complain</td>
<td><textarea  name="complain"id="complain" rows="10" cols="50" maxlength="250" placeholder="Maximum 250 words"></textarea>
</tr>
<tr>
<td><input type="submit" value="submit" onclick="return validateForm();"></td>

<td><input type="button" onClick="location.href='logout.html'" value="Logout" name="logout">
</td>
<td><button type="button" onclick="location.href='http://localhost/new_project/welcome.php'" value="Dashboard">Dashboard</button></td>
</tr>
</body>
</head>
</html>
