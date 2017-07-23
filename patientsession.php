<?php		//store's patient info in session's variable
session_start();
?>
<?php
$flag=0;
$id=$_POST['id'];
$password=$_POST['pass'];
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select * from patient";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($row['password']==$password && $row['pid']==$id)
{
$flag=1;
break;
}
}
if($flag==0)		//id and password do not match
{?>
<script>
alert("userid and password do not match");
history.back();
</script>
<?php
}
else		//id and password matches 
{		//patient's info is saved in session's variable
$_SESSION['pid']=$row['pid'];
$_SESSION['pname']=$row['name'];
$_SESSION['paddress']=$row['address'];
$_SESSION['pcontact']=$row['contact'];
$_SESSION['peid']=$row['emailid'];
?>
<?php
header("Location:patientdetails.php");
mysqli_close($con);
}
?>