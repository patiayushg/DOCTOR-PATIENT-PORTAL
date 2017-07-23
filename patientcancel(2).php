<?php
session_start();
?>
<?php
$flag=0;	//to check whether patient is entering his own appointment id
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select aid from appointment where pid='$_SESSION[pid]'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($row['aid']==$_POST['app'])
{
$flag=1;
break;
}
}
if($flag==1)
{
mysqli_query($con,$q);
$q="delete from appointment where pid='$_SESSION[pid]' and aid=$_POST[app]";
mysqli_query($con,$q);
mysqli_close($con);
?>
<script>
 alert("Your booking is cancelled successfully"); 
history.go(-1);
 </script> 
<?php
}
else
{
?>
<script>
 alert("Invalid appointment id entered"); 
history.go(-1);
 </script> 
<?php
}
?>