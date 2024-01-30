<html>
<script>
	function back()
{
window.location="studentlogin1.php";
}
</script>
<style>
body
{
		background-color: lightblue;
}
.a
{
line-height:25px;
border-radius:5px;
padding:0 10px;
width: 180px;
background-color:rgb(255,255,255,0);
}
.b
{
width: 80px;
background-color:rgb(255,255,255,0);

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
		width:1200px;
		background-color:rgb(0,0,0,0.8);
		color:white;
		padding:10px 0px 10px 0px;
		text-align:center;
		font-size:35px;
}
.div2
{
		border-radius:0px 0px 15px 15px;
		width:1200px;
		background-color:rgb(255,255,255,0.5);
		color:white;
		padding:40px 0px 40px 0px;
		font-size:20px;
}
</style>
<center>
<?php
$_GET['studentname'];
$_GET['registrationno'];
$_GET['dob'];
$_GET['email'];
$_GET['phoneno'];
$_GET['gender'];

$_GET['CSC301T1'];
$_GET['CSC301T2'];
$_GET['CSC301AVG'];
$_GET['CSC301TW'];

$_GET['CSC302T1'];
$_GET['CSC302T2'];
$_GET['CSC302AVG'];

$_GET['CSC303T1'];
$_GET['CSC303T2'];
$_GET['CSC303AVG'];

$_GET['CSC304T1'];
$_GET['CSC304T2'];
$_GET['CSC304AVG'];

$_GET['CSC305T1'];
$_GET['CSC305T2'];
$_GET['CSC305AVG'];

$_GET['CSL301TW'];
$_GET['CSL301PO'];

$_GET['CSL302TW'];

$_GET['CSL303TW'];
$_GET['CSL303PO'];

$_GET['CSL304TW'];
$_GET['CSL304PO'];

$_GET['CSM301TW'];
$_GET['CSM301PO'];

$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="miniproject";
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
?>
<body>
	<div class="div1">Update data</div>
	<div class="div2">
	<form action="" method="GET">
		<table>
			<tr>
				<td>Student name </td>
				<td><input class="a" type="text" name="studentname" value="<?php echo $_GET['studentname'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspRegistration no. </td>
				<td><input class="a" type="text" name="registrationno" value="<?php echo $_GET['registrationno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspDate of birth </td>
				<td><input class="a" type="text" name="dob" value="<?php echo $_GET['dob'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEmail </td>
				<td><input class="a" type="text" name="email" value="<?php echo $_GET['email'];?>"/></td>
			</tr>
			<tr>
				<td>Phone no. </td>
				<td><input class="a" type="text" name="phoneno" value="<?php echo $_GET['phoneno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspGender </td>
				<td><input class="a" type="text" name="gender" value="<?php echo $_GET['gender'];?>"/></td>
			</tr>
		</table><br>
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
	<tr>
		<td>CSC301</td>
		<td>ENGINEERING MATHEMATICS 3</td>
		<td><input class="b" type="text" name="CSC301T1" value="<?php echo $_GET['CSC301T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC301T2" value="<?php echo $_GET['CSC301T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC301AVG" value="<?php echo $_GET['CSC301AVG'];?>"/></td>
		<td><input class="b" type="text" name="CSC301TW" value="<?php echo $_GET['CSC301TW'];?>"/></td>
		<td>-</td>
	</tr>

    <tr>
		<td>CSC302</td>
		<td>DISCRETE STRUCTURE AND GRAPH THEORY</td>
		<td><input class="b" type="text" name="CSC302T1" value="<?php echo $_GET['CSC302T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC302T2" value="<?php echo $_GET['CSC302T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC302AVG" value="<?php echo $_GET['CSC302AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSC303</td>
		<td>DATA STRUCTURE</td>
		<td><input class="b" type="text" name="CSC303T1" value="<?php echo $_GET['CSC303T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC303T2" value="<?php echo $_GET['CSC303T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC303AVG" value="<?php echo $_GET['CSC303AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSC304</td>
		<td>DIGITAL LOGIC AND COMPUTER ARCHITECTURE</td>
		<td><input class="b" type="text" name="CSC304T1" value="<?php echo $_GET['CSC304T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC304T2" value="<?php echo $_GET['CSC304T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC304AVG" value="<?php echo $_GET['CSC304AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSC305</td>
		<td>COMPUTER GRAPHICS</td>
		<td><input class="b" type="text" name="CSC305T1" value="<?php echo $_GET['CSC305T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC305T2" value="<?php echo $_GET['CSC305T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC305AVG" value="<?php echo $_GET['CSC305AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSL301</td>
		<td>DATA STRUCTURE LAB</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL301TW" value="<?php echo $_GET['CSL301TW'];?>"/></td>
		<td><input class="b" type="text" name="CSL301PO" value="<?php echo $_GET['CSL301PO'];?>"/></td>
	</tr>

	<tr>
		<td>CSL302</td>
		<td>DIGITAL LOGIC AND COMPUTER ARCHITECTURE LAB</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL302TW" value="<?php echo $_GET['CSL302TW'];?>"/></td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSL303</td>
		<td>COMPUTER GRAPHICS LAB</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL303TW" value="<?php echo $_GET['CSL303TW'];?>"/></td>
		<td><input class="b" type="text" name="CSL303PO" value="<?php echo $_GET['CSL303PO'];?>"/></td>
	</tr>

	<tr>
		<td>CSL304</td>
		<td>SKILL BASE LAB COURSE:OBJECT ORIENTED PROGRAMMING WITH JAVA</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL304TW" value="<?php echo $_GET['CSL304TW'];?>"/></td>
		<td><input class="b" type="text" name="CSL304PO" value="<?php echo $_GET['CSL304PO'];?>"/></td>
	</tr>

	<tr>
		<td>CSM301</td>
		<td>MINI PROJECT-1A</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSM301TW" value="<?php echo $_GET['CSM301TW'];?>"/></td>
		<td><input class="b" type="text" name="CSM301PO" value="<?php echo $_GET['CSM301PO'];?>"/></td>
	</tr>

	</table><br>
	<input class="s" type="button" name="button" value="Back" onclick="back()">
	<input class="s" type="submit" name="submit" value="Update">
	</form>
<?php
if($_GET['submit'])
{
	$studentname=$_GET['studentname'];
	$registrationno=$_GET['registrationno'];
	$dob=$_GET['dob'];
	$email=$_GET['email'];
	$phoneno=$_GET['phoneno'];
	$gender=$_GET['gender'];

	$CSC301T1=$_GET['CSC301T1'];
	$CSC301T2=$_GET['CSC301T2'];
	$CSC301AVG=$_GET['CSC301AVG'];
	$CSC301TW=$_GET['CSC301TW'];

	$CSC302T1=$_GET['CSC302T1'];
	$CSC302T2=$_GET['CSC302T2'];
	$CSC302AVG=$_GET['CSC302AVG'];

	$CSC303T1=$_GET['CSC303T1'];
	$CSC303T2=$_GET['CSC303T2'];
	$CSC303AVG=$_GET['CSC303AVG'];

	$CSC304T1=$_GET['CSC304T1'];
	$CSC304T2=$_GET['CSC304T2'];
	$CSC304AVG=$_GET['CSC304AVG'];

	$CSC305T1=$_GET['CSC305T1'];
	$CSC305T2=$_GET['CSC305T2'];
	$CSC305AVG=$_GET['CSC305AVG'];

	$CSL301TW=$_GET['CSL301TW'];
	$CSL301PO=$_GET['CSL301PO'];

	$CSL302TW=$_GET['CSL302TW'];

	$CSL303TW=$_GET['CSL303TW'];
	$CSL303PO=$_GET['CSL303PO'];

	$CSL304TW=$_GET['CSL304TW'];
	$CSL304PO=$_GET['CSL304PO'];

	$CSM301TW=$_GET['CSM301TW'];
	$CSM301PO=$_GET['CSM301PO'];

	$query="UPDATE result1 SET studentname='$studentname',registrationno='$registrationno',dob='$dob',email='$email',phoneno='$phoneno',gender='$gender',CSC301T1='$CSC301T1',CSC301T2='$CSC301T2',CSC301AVG='$CSC301AVG',CSC301TW='$CSC301TW',CSC302T1='$CSC302T1',CSC302T2='$CSC302T2',CSC302AVG='$CSC302AVG',CSC303T1='$CSC303T1',CSC303T2='$CSC303T2',CSC303AVG='$CSC303AVG',CSC304T1='$CSC304T1',CSC304T2='$CSC304T2',CSC304AVG='$CSC304AVG',CSC305T1='$CSC305T1',CSC305T2='$CSC305T2',CSC305AVG='$CSC305AVG',CSL301TW='$CSL301TW',CSL301PO='$CSL301PO',CSL302TW='$CSL302TW',CSL303TW='$CSL303TW',CSL303PO='$CSL303PO',CSL304TW='$CSL304TW',CSL304PO='$CSL304PO',CSM301TW='$CSM301TW',CSM301PO='$CSM301PO' WHERE registrationno='$registrationno'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo'<script>alert("Record updated successfully")</script>';
	}
	else
	{
		echo'<script>alert("Record not updated")</script>';
	}
}
?>
</div>
</center>
</body>
</html>