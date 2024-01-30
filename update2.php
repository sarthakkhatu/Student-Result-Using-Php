<html>
<script>
	function back()
{
window.location="studentlogin2.php";
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

$_GET['CSC401T1'];
$_GET['CSC401T2'];
$_GET['CSC401AVG'];
$_GET['CSC401TW'];

$_GET['CSC402T1'];
$_GET['CSC402T2'];
$_GET['CSC402AVG'];

$_GET['CSC403T1'];
$_GET['CSC403T2'];
$_GET['CSC403AVG'];

$_GET['CSC404T1'];
$_GET['CSC404T2'];
$_GET['CSC404AVG'];

$_GET['CSC405T1'];
$_GET['CSC405T2'];
$_GET['CSC405AVG'];

$_GET['CSL401TW'];
$_GET['CSL401PO'];

$_GET['CSL402TW'];
$_GET['CSL402PO'];

$_GET['CSL403TW'];
$_GET['CSL403PO'];

$_GET['CSL404TW'];

$_GET['CSL405TW'];

$_GET['CSM401TW'];
$_GET['CSM401PO'];

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
		<td>CSC401</td>
		<td>ENGINEERING MATHEMATICS 4</td>
		<td><input class="b" type="text" name="CSC401T1" value="<?php echo $_GET['CSC401T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC401T2" value="<?php echo $_GET['CSC401T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC401AVG" value="<?php echo $_GET['CSC401AVG'];?>"/></td>
		<td><input class="b" type="text" name="CSC401TW" value="<?php echo $_GET['CSC401TW'];?>"/></td>
		<td>-</td>
	</tr>

    <tr>
		<td>CSC402</td>
		<td>ANALYSIS OF ALGORITHM</td>
		<td><input class="b" type="text" name="CSC402T1" value="<?php echo $_GET['CSC402T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC402T2" value="<?php echo $_GET['CSC402T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC402AVG" value="<?php echo $_GET['CSC402AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSC403</td>
		<td>DATABASE MANAGEMENT SYSTEM</td>
		<td><input class="b" type="text" name="CSC403T1" value="<?php echo $_GET['CSC403T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC403T2" value="<?php echo $_GET['CSC403T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC403AVG" value="<?php echo $_GET['CSC403AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSC404</td>
		<td>OPERATING SYSTEM</td>
		<td><input class="b" type="text" name="CSC404T1" value="<?php echo $_GET['CSC404T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC404T2" value="<?php echo $_GET['CSC404T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC404AVG" value="<?php echo $_GET['CSC404AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSC405</td>
		<td>MICROPROCESSOR</td>
		<td><input class="b" type="text" name="CSC405T1" value="<?php echo $_GET['CSC405T1'];?>"/></td>
		<td><input class="b" type="text" name="CSC405T2" value="<?php echo $_GET['CSC405T2'];?>"/></td>
		<td><input class="b" type="text" name="CSC405AVG" value="<?php echo $_GET['CSC405AVG'];?>"/></td>
		<td>-</td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSL401</td>
		<td>ANALYSIS OF ALGORITHM LAB</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL401TW" value="<?php echo $_GET['CSL401TW'];?>"/></td>
		<td><input class="b" type="text" name="CSL401PO" value="<?php echo $_GET['CSL401PO'];?>"/></td>
	</tr>

	<tr>
		<td>CSL402</td>
		<td>DATABASE MANAGEMENT SYSTEM LAB</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL402TW" value="<?php echo $_GET['CSL402TW'];?>"/></td>
		<td><input class="b" type="text" name="CSL402PO" value="<?php echo $_GET['CSL402PO'];?>"/></td>
	</tr>

	<tr>
		<td>CSL403</td>
		<td>OPERATING SYSTEM LAB</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL403TW" value="<?php echo $_GET['CSL403TW'];?>"/></td>
		<td><input class="b" type="text" name="CSL403PO" value="<?php echo $_GET['CSL403PO'];?>"/></td>
	</tr>

	<tr>
		<td>CSL404</td>
		<td>MICROPROCESSOR LAB</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL404TW" value="<?php echo $_GET['CSL404TW'];?>"/></td>
		<td>-</td>
	</tr>
	<tr>
		<td>CSL405</td>
		<td>SKILL BASE LAB COURSE:PYTHON PROGRAMMING</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSL405TW" value="<?php echo $_GET['CSL405TW'];?>"/></td>
		<td>-</td>
	</tr>

	<tr>
		<td>CSM401</td>
		<td>MINI PROJECT-1B</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td><input class="b" type="text" name="CSM401TW" value="<?php echo $_GET['CSM401TW'];?>"/></td>
		<td><input class="b" type="text" name="CSM401PO" value="<?php echo $_GET['CSM401PO'];?>"/></td>
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

	$CSC401T1=$_GET['CSC401T1'];
	$CSC401T2=$_GET['CSC401T2'];
	$CSC401AVG=$_GET['CSC401AVG'];
	$CSC401TW=$_GET['CSC401TW'];

	$CSC402T1=$_GET['CSC402T1'];
	$CSC402T2=$_GET['CSC402T2'];
	$CSC402AVG=$_GET['CSC402AVG'];

	$CSC403T1=$_GET['CSC403T1'];
	$CSC403T2=$_GET['CSC403T2'];
	$CSC403AVG=$_GET['CSC403AVG'];

	$CSC404T1=$_GET['CSC404T1'];
	$CSC404T2=$_GET['CSC404T2'];
	$CSC404AVG=$_GET['CSC404AVG'];

	$CSC405T1=$_GET['CSC405T1'];
	$CSC405T2=$_GET['CSC405T2'];
	$CSC405AVG=$_GET['CSC405AVG'];

	$CSL401TW=$_GET['CSL401TW'];
	$CSL401PO=$_GET['CSL401PO'];

	$CSL402TW=$_GET['CSL402TW'];
	$CSL402PO=$_GET['CSL402PO'];

	$CSL403TW=$_GET['CSL403TW'];
	$CSL403PO=$_GET['CSL403PO'];

	$CSL404TW=$_GET['CSL404TW'];

	$CSL405TW=$_GET['CSL405TW'];

	$CSM401TW=$_GET['CSM401TW'];
	$CSM401PO=$_GET['CSM401PO'];

	$query="UPDATE result1 SET studentname='$studentname',registrationno='$registrationno',dob='$dob',email='$email',phoneno='$phoneno',gender='$gender',CSC401T1='$CSC401T1',CSC401T2='$CSC401T2',CSC401AVG='$CSC401AVG',CSC401TW='$CSC401TW',CSC402T1='$CSC402T1',CSC402T2='$CSC402T2',CSC402AVG='$CSC402AVG',CSC403T1='$CSC403T1',CSC403T2='$CSC403T2',CSC403AVG='$CSC403AVG',CSC404T1='$CSC404T1',CSC404T2='$CSC404T2',CSC404AVG='$CSC404AVG',CSC405T1='$CSC405T1',CSC405T2='$CSC405T2',CSC405AVG='$CSC405AVG',CSL401TW='$CSL401TW',CSL401PO='$CSL401PO',CSL402TW='$CSL402TW',CSL402PO='$CSL402PO',CSL403TW='$CSL403TW',CSL403PO='$CSL403PO',CSL404TW='$CSL404TW',CSL405TW='$CSL405TW',CSM401TW='$CSM401TW',CSM401PO='$CSM401PO' WHERE registrationno='$registrationno'";
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