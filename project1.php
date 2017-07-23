<html>		<!--REGISTERATION OF NEW USER-->
<head>
<title>Patient's enquiry</title>
<script>			//checking invalid entry while registering
function validate()
{
var a=document.getElementsByClassName("class");
if(a[0].value.length==1)	//invalid name
{
alert("invalid name entered");
return(false);
}
if(a[1].value.length<3)		//invalid address
{
alert("invalid address entered");
return(false);
}
if(a[2].value<1000)		//invalid contact number
{
alert("invalid contact number");
return(false);
}
if(a[4].value.length<4)		//invalid user id
{
alert("User id should be of atleast 4 characters");
return(false);
}
if(a[5].value!=a[6].value)	//password wrongly re-entered
{
alert("enter the password correctly");
return(false);
}
if(a[5].value.length<4)		//restriction on password length
{
alert("password should of atleast 4 characters");
return(false);
}
var indexofat=a[3].value.indexOf('@');		//invalid email id
var indexofdot=a[3].value.lastIndexOf('.');
var length=a[3].value.length;
if(indexofat==0||indexofdot>=length-2||indexofdot-indexofat<3)
{
alert("invalid email id");
return(false);
}
var result=confirm("do u wish to submit form");
return(result);
}
</script>
</head>
<body>
<form method="post" action="register.php" onsubmit="return validate()">
<table align="center" border=2px cellspacing=0px>
<caption>Register now</caption>
<tr>
<th height=60px>Name</th>
<td><input class="class" type="text" name="name" required/></td>
</tr>
<tr>
<th height=60px>Address</th>
<td><input class="class" type="text" name="add" required/></td>
</tr>
<tr>
<th height=60px>Contact number</th>
<td width=200px><input class="class" type="number" name="cn" required/></td>
</tr>
<tr>
<th height=60px >Email-ID</th>
<td width=200px><input class="class" type="text" name="eid" required/></td>
</tr>
<tr>
<th height=60px>User-id<br/></th>
<td width=200px><input class="class" type="text" name="uid" placeholder="to be used for login purpose" required/></td>
</tr>
<tr>
<th height=60px>Password</th>
<td width=200px><input class="class" type="password" name="pass" required/></td>
</tr>
<tr>
<th height=60px>re enter Password</th>
<td width=200px><input class="class" type="password" name="pass" required/></td>
</tr>
<tr>
<td colspan=2 align="center" height=40px width=200px><input type="submit" value="submit to register" />
</tr>
</table>
</form>
</body>
</html>