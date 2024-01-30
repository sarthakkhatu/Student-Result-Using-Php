<html>
<style>
body
{
		background-color: lightblue;
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
		font-size:20px;
}
.div3
{
		border-radius:15px 15px 15px 15px;
		width:1100px;
		background-color:rgb(255,255,255,0.5);
		color:white;
		padding:40px 0px 40px 0px;
		font-size:20px;

}

</style>
<script language="Javascript" type="text/javascript">
function back()
{
window.location="sem34.php";
}
</script>
<body>
	<br><br><br><br><br><center><div class="div1">Student marksheet<br></div>
	<form action="studentlogin1.php" method="post">
	<div class="div2">
		Registration no. <input class="a" type="text" name="t1" id="t1"><br><br>
		<input class="s" type="button" name="b1" value="Back" onclick="back()">
		<input class="s" type="submit" name="b2" value="Login" onclick="next()"></div>
	</form>
	<?php
$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="miniproject";
if(isset($_POST['b2']))
{
$t1=$_POST['t1'];
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
$query="SELECT * FROM result1 WHERE registrationno='$t1'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo"Data found<br>Do you want to edit?<br>";
		echo"<a href='update1.php?studentname=$result[studentname] & registrationno=$result[registrationno] & dob=$result[dob] & email=$result[email] & phoneno=$result[phoneno] & gender=$result[gender] & CSC301T1=$result[CSC301T1] & CSC301T2=$result[CSC301T2] & CSC301AVG=$result[CSC301AVG] & CSC301TW=$result[CSC301TW] & CSC302T1=$result[CSC302T1] & CSC302T2=$result[CSC302T2] & CSC302AVG=$result[CSC302AVG] & CSC303T1=$result[CSC303T1] & CSC303T2=$result[CSC303T2] & CSC303AVG=$result[CSC303AVG] &CSC304T1=$result[CSC304T1] & CSC304T2=$result[CSC304T2] & CSC304AVG=$result[CSC304AVG] & CSC305T1=$result[CSC305T1] & CSC305T2=$result[CSC305T2] & CSC305AVG=$result[CSC305AVG] & CSL301TW=$result[CSL301TW] & CSL301PO=$result[CSL301PO] & CSL302TW=$result[CSL302TW] & CSL303TW=$result[CSL303TW] &  CSL303PO=$result[CSL303PO] & CSL304TW=$result[CSL304TW] &  CSL304PO=$result[CSL304PO] & CSM301TW=$result[CSM301TW] &  CSM301PO=$result[CSM301PO] & CSL301TW=$result[CSL301TW] & CSL301PO=$result[CSL301PO] & CSL302TW=$result[CSL302TW] & CSL303TW=$result[CSL303TW] & CSL303PO=$result[CSL303PO] & CSL304TW=$result[CSL304TW] & CSL304PO=$result[CSL304PO] & CSM301TW=$result[CSM301TW] & CSM301PO=$result[CSM301PO]'>Edit</a>";
	}
}
else
{
echo"Data not found";
}
}
?>
</center>
</body>
</html>