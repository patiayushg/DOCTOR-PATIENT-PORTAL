<body style="background-color: rgb(190,0,255);"></body>
<?php		//ADMIN ADD'S NEW DOCTOR
$did=$_POST['did'];
$name=$_POST['dname'];
$add=$_POST['dadd'];
$cno=$_POST['dno'];
$cat=$_POST['dcategory'];
$pass=$_POST['dpass'];
$con=mysqli_connect('localhost','ACER','1234','software');
$res=mysqli_query($con,$qu);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($row['did']==$did)
{
?>
<script>
alert("This doctor id has already been registered with us enter some different id");
history.go(-1);
</script>
<?php
break;
}
}
$q="insert into doctor values ('$did','$name','$add',$cno,'$cat','$pass')";
if(mysqli_query($con,$q))
echo "$name is registered successfully";
else
echo "$name cannot be registered";
mysqli_close($con);
?>