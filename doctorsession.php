<?php		//STORING DOCTOR'S INFO IN SESSION'S VARIABLE
session_start();
?>
<?php
$flag=0;
$id=$_POST['id'];
$password=$_POST['pass'];
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select * from doctor";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($row['dpassword']==$password && $row['did']==$id)
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
{		//doctor's info is saved in session's variable
$_SESSION['did']=$row['did'];
$_SESSION['dname']=$row['dname'];
$_SESSION['daddress']=$row['daddress'];
$_SESSION['dcontact']=$row['dcontact'];
$_SESSION['dcategory']=$row['dcategory'];
?>
<?php
header("Location:doctordetails.php");
}
?>