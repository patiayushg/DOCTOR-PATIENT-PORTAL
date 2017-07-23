<html>				<!--PATIENT LOGIN PAGE-->
<head>
<title>Patient's enquiry</title>
<script>
function validate()			<!--To check entered id and password are of atleast 4 digits-->
{
var x=document.getElementsByClassName("class");
if(x[0].value.length<4)
{
alert("user id is not valid");
return(false);
}
if(x[1].value.length<4)
{
alert("password is not valid");
return(false);
}
}
</script>
</head>
<body style="background-image: url(patient1.jpg);background-repeat: repeat-x;">
<div id="di2" align="center" style="width: 400px;height: 200px; margin-left: 780px; margin-top: 20px;background-color: powderblue;">
<form method="post" action="patientsession.php" onsubmit="return validate()">		<!-- Register/Login table-->
<p id="p1">
<br/>
User Id <input class="class" type="text" name="id"/>
<br/><br/>
Password <input class="class" type="password" name="pass"/>
<br/><br/>
<input type="submit" value="Login"/>
<br/><br/>
Not a member yet! <a href="project1.php">Register</a>
</p>
</form>
</div>
</body>
</html>