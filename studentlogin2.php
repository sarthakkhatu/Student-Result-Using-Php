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
	<form action="studentlogin2.php" method="post">
	<div class="div2">
		Registration no. <input class="a" type="text" name="t1" id="t1"><br><br>
		<input class="s" type="button" name="b1" value="Back" onclick="back()">
		<input class="s" type="submit" name="b2" value="Login"></div>
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
		echo"<a href='update2.php? studentname=$result[studentname] & registrationno=$result[registrationno] & dob=$result[dob] & email=$result[email] & phoneno=$result[phoneno] & gender=$result[gender] & CSC401T1=$result[CSC401T1] & CSC401T2=$result[CSC401T2] & CSC401AVG=$result[CSC401AVG] & CSC401TW=$result[CSC401TW] & CSC402T1=$result[CSC402T1] & CSC402T2=$result[CSC402T2] & CSC402AVG=$result[CSC402AVG] & CSC403T1=$result[CSC403T1] & CSC403T2=$result[CSC403T2] & CSC403AVG=$result[CSC403AVG] &CSC404T1=$result[CSC404T1] & CSC404T2=$result[CSC404T2] & CSC404AVG=$result[CSC404AVG] & CSC405T1=$result[CSC405T1] & CSC405T2=$result[CSC405T2] & CSC405AVG=$result[CSC405AVG] & CSL401TW=$result[CSL401TW] & CSL401PO=$result[CSL401PO] & CSL402TW=$result[CSL402TW] & CSL402PO=$result[CSL402PO] & CSL403TW=$result[CSL403TW] &  CSL403PO=$result[CSL403PO] & CSL404TW=$result[CSL404TW] & CSL405TW=$result[CSL405TW] & CSM401TW=$result[CSM401TW] & CSM401PO=$result[CSM401PO] '>Edit</a>";
	}
}
else
{
echo"Data not found";
}
}

?>
</table></div>
</center>
</body>
</html>