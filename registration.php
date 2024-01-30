<html>
<head>
<title></title>
<head>
<style>
body
{
background-color: lightblue;
}
.div1
{
border-radius:15px 15px 0px 0px;
width:600px;
background-color:rgb(0,0,0,0.8);
color:white;
padding:10px 0px 10px 0px;
text-align:center;
font-size:35px;
}
.div2
{
border-radius:0px 0px 15px 15px;
width:600px;
background-color:rgb(0,0,0,0.6);
color:white;
padding:40px 0px 40px 0px;
font-size:18px;
}
.a
{
line-height:25px;
border-radius:5px;
padding:0 30px;
}
.s
{
line-height:25px;
border-radius:5px;
padding:0 20px;
background-color:skyblue;
}
</style>
<script language="Javascript" type="text/javascript">
function back()
{
window.location="teacherlogin3.php";
}
</script>
</head>
<body>
<?php
$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="miniproject";
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
if(isset($_POST['r']))
{
$studentname=$_POST['studentname'];
$registrationno=$_POST['registrationno'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$gender=$_POST['gender'];
if($conn->connect_error)
{ 
	
	die("connection failed");
}
echo"";
if($studentname=="" || $registrationno=="" || $dob=="" || $email=="" || $phoneno=="" || $gender=="")
{
echo'<script>alert("Please fill all the details")</script>';	
}
else if($studentname!="" && $registrationno!="" && $dob!="" && $email!="" && $phoneno!="" && $gender!="")
{
$sql="insert into result1(studentname,registrationno,dob,email,phoneno,gender)values('$studentname','$registrationno','$dob','$email','$phoneno','$gender')";
if($conn->query($sql)==true)
{
echo'<script>alert("Registration successful")</script>';
}
else
{
echo '<script>alert("Registration unsuccessful")</script>';
}
}
}
?>
<form action="registration.php" method="post">
<center><br><br><br><br><br><div class="div1">Registration Form</div></center>
<center>
<div class="div2">
Student name: <input class="a" type="text" id="t1" name="studentname"><br><br>
Registration no.: <input class="a" type="text" id="t2" name="registrationno"><br><br>
Date of birth: <input class="a" type="text" id="t3" name="dob"><br><br>
E-mail.: <input class="a" type="text" id="t4" name="email"><br><br>
Phone no.: <input class="a" type="text" id="t5" name="phoneno"><br><br>
Gender: <input class="a" type="radio" id="r" value="Male" name="gender">Male
<input class="a" type="radio" id="r" value="Female" name="gender">Female<br><br>
<input class="s" type="button" name="b1" value="Back" onclick="back()">
<input class="s" type="submit" name="r" value="Register" onclick="register()">
</center>
</div>
</form>
</center>
</body>
</html>