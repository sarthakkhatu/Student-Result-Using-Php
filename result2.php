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
window.location="result.php";
}
</script>
<body>
	<br><br><br><br><br><center><div class="div1">Student marksheet<br></div>
	<form action="result2.php" method="post">
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
	?>
	<div class="div3">
	<table border=1>
		<tr>
		<th rowspan=2>COURSE CODE</th>
		<th rowspan=2>COURSE NAME</th>
		<th colspan=3>INTERNAL ASSESSMENT</th>
		<th rowspan=2>TERM WORK</th>
		<th rowspan=2>PRACTICAL AND ORAL</th>
	</tr>
	<tr>
		<td>TEST 1</td>
		<td>TEST 2</td>
		<td>AVERAGE</td>
	</tr>
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo"<tr>
				<td>CSC401</td>
				<td>ENGINEERING MATHEMATICS 4</td>
				<td>".$result['CSC401T1']."</td>
				<td>".$result['CSC401T2']."</td>
				<td>".$result['CSC401AVG']."</td>
				<td>".$result['CSC401TW']."</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC402</td>
				<td>ANALYSIS OF ALGORITHM</td>
				<td>".$result['CSC402T1']."</td>
				<td>".$result['CSC402T2']."</td>
				<td>".$result['CSC402AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC403</td>
				<td>DATABASE MANAGEMENT SYSTEM</td>
				<td>".$result['CSC403T1']."</td>
				<td>".$result['CSC403T2']."</td>
				<td>".$result['CSC403AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC404</td>
				<td>OPERATING SYSTEM</td>
				<td>".$result['CSC404T1']."</td>
				<td>".$result['CSC404T2']."</td>
				<td>".$result['CSC404AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC405</td>
				<td>MICROPROCESSOR</td>
				<td>".$result['CSC405T1']."</td>
				<td>".$result['CSC405T2']."</td>
				<td>".$result['CSC405AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSL401</td>
				<td>ANALYSIS OF ALGORITHM LAB</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL401TW']."</td>
				<td>".$result['CSL401PO']."</td>
			</tr>

            <tr>
				<td>CSL402</td>
				<td>DATABASE MANAGEMENT SYSTEM LAB</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL402TW']."</td>
				<td>".$result['CSL402PO']."</td>
			</tr>
			<tr>
				<td>CSL403</td>
				<td>OPERATING SYSTEM LAB</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL403TW']."</td>
				<td>".$result['CSL403PO']."</td>
			</tr>
			<tr>
				<td>CSL404</td>
				<td>MICROPROCESSOR LAB</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL404TW']."</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSL405</td>
				<td>SKILL BASE LAB COURSE:PYTHON PROGRAMMING</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL405TW']."</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSM401</td>
				<td>MINI PROJECT-1B</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSM401TW']."</td>
				<td>".$result['CSM401PO']."</td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>