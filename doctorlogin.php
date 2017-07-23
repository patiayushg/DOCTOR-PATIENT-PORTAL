<html>				<!--DOCTOR LOGIN PAGE-->
<head>
<title>Doctor's Portal</title>
<link rel="stylesheet" type="text/css" href="project.css"/>	<!--styling of doctor login page-->
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
<style>
#div2 #p1
{
height:135px;
}
</style>
</head>
<body style="background-image: url(doctor1.jpg);background-repeat: no-repeat;background-color: powderblue;">
<div id="di2" align="center" style="width: 200px;height: 200px; margin-left: 40px; margin-top: 10px;">
<form method="post" action="doctorsession.php" onsubmit="return validate()">		<!-- Register/Login table-->
<p id="p1">
<br/>
Doctor Id <input class="class" type="text" name="id"/>
<br/><br/>
Password <input class="class" type="password" name="pass"/>
<br/><br/>
<input type="submit" value="Login"/>
</p>
</form>
</div>
</body>
</html>