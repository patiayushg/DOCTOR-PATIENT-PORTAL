<?php
session_start();
?>
<html>
<head>
<title>Doctor Portal</title>
<script>
function validate()
{
var x= confirm("Are you sure you want to insert information");
if(x)
return(true);
return(false);
}
</script>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
<!--common property on each page-->	
</head>
<body>
<div id="div1">
<p>DOCTOR PATIENT<br/><span>PORTAL</span></p>
<img src="health.jpg" alt="Can't find the image" align="right"/>
</div>
<div id="div2">
<ul type="none">
<a href="doctordetails.php"><li>My Details</li></a>
<a href="doctorappointment.php"><li>My Appointments</li></a>
<a href="doctorsearch.php"><li>Search Patient</li></a>
<a href="doctornote.php"><li>Add Description</li></a>
<a href="doctorlogin.php"><li>Logout</li></a>
</ul>
</div>
<form action="doctornote(3).php" method="post" onsubmit="return validate()">
<table align="center" border=2px cellspacing=0px>
<tr>
<th height=60px width=120px>Patient Id</th>
<td align="center">
<input type="text" value="<?php echo $_POST['id']?>" readonly/>
</td>
</tr>
<tr>
<th height=60px width=120px>Treatment</th>
<td align="center">
<input type="text" name="treat" required/>
</td>
</tr>
<tr>
<th height=60px width=120px>Note</th>
<td><textarea name="text" rows=3 cols=25 required></textarea></td>
<tr>
<td colspan=2 align="center" height=40px width=200px>
<input type="submit"/>
</td>
</tr>
</table>
</form>
<?php
$_SESSION['dpid']=$_POST['id'];
?>
</body>
</html>