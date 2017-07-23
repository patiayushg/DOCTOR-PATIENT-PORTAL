<html>				<!--ADMIN LOGIN PAGE-->
<head>
<title>Admin's Portal</title>
<link rel="stylesheet" type="text/css" href="project.css"/>	<!--styling of admin login page-->
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
<body style="background-image: url(admin1.png);background-repeat: repeat-x;background-color: powderblue">
<div id="di2" align="center" style="width: 400px;height: 200px; margin-left: 40px; margin-top: 20px;">
<form method="post" action="adminsession.php" onsubmit="return validate()">	<!--Login table-->
<p id="p1">
<br/>
UserId <input class="class" type="text" name="adminid"/>
<br/><br/>
Password <input class="class" type="password" name="adminpass"/>
<br/><br/>
<input type="submit" value="Login"/>
</p>
</form>
</div>
</body>
</html>