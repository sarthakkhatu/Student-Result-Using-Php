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
	<form action="result1.php" method="post">
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
				<td>CSC301</td>
				<td>ENGINEERING MATHEMATICS 3</td>
				<td>".$result['CSC301T1']."</td>
				<td>".$result['CSC301T2']."</td>
				<td>".$result['CSC301AVG']."</td>
				<td>".$result['CSC301TW']."</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC302</td>
				<td>DISCRETE STRUCTURE AND GRAPH THEORY</td>
				<td>".$result['CSC302T1']."</td>
				<td>".$result['CSC302T2']."</td>
				<td>".$result['CSC302AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC303</td>
				<td>DATA STRUCTURE</td>
				<td>".$result['CSC303T1']."</td>
				<td>".$result['CSC303T2']."</td>
				<td>".$result['CSC303AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC304</td>
				<td>DIGITAL LOGIC AND COMPUTER ARCHITECTURE</td>
				<td>".$result['CSC304T1']."</td>
				<td>".$result['CSC304T2']."</td>
				<td>".$result['CSC304AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSC305</td>
				<td>COMPUTER GRAPHICS</td>
				<td>".$result['CSC305T1']."</td>
				<td>".$result['CSC305T2']."</td>
				<td>".$result['CSC305AVG']."</td>
				<td>-</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSL301</td>
				<td>DATA STRUCTURE LAB</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL301TW']."</td>
				<td>".$result['CSL301PO']."</td>
			</tr>

            <tr>
				<td>CSL302</td>
				<td>DIGITAL LOGIC AND COMPUTER ARCHITECTURE LAB</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL302TW']."</td>
				<td>-</td>
			</tr>
			<tr>
				<td>CSL303</td>
				<td>COMPUTER GRAPHICS LAB</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL303TW']."</td>
				<td>".$result['CSL303PO']."</td>
			</tr>
			<tr>
				<td>CSL304</td>
				<td>SKILL BASE LAB COURSE:OBJECT ORIENTED PROGRAMMING WITH JAVA</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSL304TW']."</td>
				<td>".$result['CSL304PO']."</td>
			</tr>
			<tr>
				<td>CSM301</td>
				<td>MINI PROJECT-1A</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>".$result['CSM301TW']."</td>
				<td>".$result['CSM301PO']."</td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>