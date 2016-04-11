4<?php
session_start();
if(isset($_POST['logout']))
{
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
}
if(isset($_POST['login'])){
	echo ""."<br>";
}
?>
<html>
<head>
<title>
Admin Page
</title>
<style>
h1{
font-family:Trebuchet MS;

padding-left:825px;
padding-top:100px;
}
h3.a{
font-family:Trebuchet MS;

padding-left:825px;
padding-top:200px;
}
h3.b{
font-family:Trebuchet MS;

padding-left:825px;
padding-top:10px;
}
h3.c{
font-family:Trebuchet MS;

padding-left:825px;
padding-top:10px;
}
h3.d{
font-family:Trebuchet MS;

padding-left:825px;
padding-top:10px;
}
h3.e{
font-family:Trebuchet MS;

padding-left:825px;
padding-top:10px;
}
</style>
</head>
<body bgcolor="#1abc9c">
<h1><font color="white">Here we go! Admin</font></h1>
<h3 class="a"> <font color="white">To Generate Report by UserId</font>
<input type="button" onclick="location.href=('report_by_user.html')" value="Click Me!"/></h3>
<h3 class="b"><font color="white">To Generate Report by PoliceStationId</font>
<input type="button" onClick="location.href=('report_by_police_station.html')" value="Click Me!"></h3>
<h3 class="c"><font color="white">To add User</font>
<input type="button" onclick="location.href=('add_user.html')" value="Click Me!"/></h3>
<h3 class="d"><font color="white">To add Police Station</font>
<input type="button" onClick="location.href=('add_police_station.html')" value="Click Me!"></h3>
<h3 class="e"><input type="button" onClick="location.href='logout_admin.html'" value="Logout" name="logout"></h3>
</body>

</html>