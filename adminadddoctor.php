<html>		<!--ADMIN CAN ADD DOCTOR-->
<head>
<title>Admin's Portal</title>
<script>			//checking invalid entry while adding doctor
function validate()
{
var a=document.getElementsByClassName("class");
if(a[1].value.length==1)	//invalid name
{
alert("invalid name entered");
return(false);
}
if(a[2].value.length<3)		//invalid address
{
alert("invalid address entered");
return(false);
}
if(a[3].value<1000)		//invalid contact number
{
alert("invalid contact number");
return(false);
}
if(a[0].value.length<4)		//invalid doctor id
{
alert("doctor id should be of atleast 4 characters");
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
var result=confirm("do u wish to submit form");
return(result);
}
</script>
<link rel="stylesheet" type="text/css" href="admin.css"/>
<style type="text/css">
#div2
{
min-width:600px;
}
</style>
</head>
<body style="background-image: url(admin1.png);background-repeat: repeat-x;background-color: powderblue">
<div id="div2">
<ul type="none">
<a href="adminadddoctor.php"><li>Add Doctor</li></a>
<a href="adminviewdoctor.php"><li>View Doctor</li></a>
<a href="adminviewpatient.php"><li>View Patient</li></a>
<a href="adminviewappointment.php"><li>View Appointment</li></a>
<a href="adminviewdonor.php"><li>View Donor</li></a>
<a href="adminlogin.php"><li>Logout</li></a>
</ul>
</div>
<form action="adddoctor.php" method="post" onsubmit="return validate()">
<table style="margin-left: 800px;margin-top: -80px;background-color: rgb(255,255,150);" border=2px cellspacing=0px>
<caption style="background-color: rgb(255,255,150);">Add Doctor</caption>
<tr>
<th height=60px width=120px>Doctor Id</th>
<td align="center"><input placeholder="Email-Id" class="class" type="text" name="did" required/></td>
</tr>
<tr>
<th height=60px width=120px>Name</th>
<td width=200px align="center"><input placeholder="Name" class="class" type="text" name="dname" required /></td>
</tr>
<tr>
<th height=60px width=120px>Address</th>
<td width=200px align="center"><input placeholder="Address" class="class" type="text" name="dadd"/></td> 
</tr>
<tr>
<th height=60px width=120px>Contact no</th>
<td align="center"><input placeholder="Contact No" class="class" type="number" name="dno" required/></td>
</tr>
<tr>
<th height=60px width=120px>Category</th>
<td align="center">
<select name="dcategory" class="class" required/>
<option value="None">None</option>
<option value="Bone Specialist">Bone Specialist</option>
<option value="Heart Specialist">Heart Specialist</option>
<option value="Eye/Ear Specialist">Eye/Ear Specialist</option>
<option value="Dentist">Dentist</option>
<option value="Pediatrician">Pediatrician</option>
<option value="Psychiatrist">Psychiatrist</option>
</select>
</td>
</tr>
<tr>
<th height=60px width=120px>Password</th>
<td align="center"><input placeholder="Password" class="class" type="password" name="dpass" required/></td>
</tr>
<tr>
<th height=60px width=120px>Re-enter Password</th>
<td align="center"><input placeholder="Re-enter Your Password" class="class" type="password" name="dpass" required/></td>
</tr>
<tr>
<td colspan=2 align="center" height=40px width=200px><input type="submit" />
</tr>
</table>
</form>
</body>
</html>