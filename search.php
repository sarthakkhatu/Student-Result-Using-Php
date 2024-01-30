<html>
<script>
	function back()
{
window.location="homepage.php";
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
		width:700px;
		background-color:rgb(255,255,255,0.5);
		color:white;
		padding:40px 0px 40px 0px;
		font-size:20px;

}
</style>
<body>
	<br><br><br><br><br><center><div class="div1">Registered student details<br></div>
	<form action="search.php" method="post">
	<div class="div2">Enter Registration no. <input class="a" type="text" name="t1"><br><br>
	<input class="s" type="button" name="b1" value="Back" onclick="back()">
	<input class="s" type="submit" name="b1" value="Search"></div>
	</form>
	<?php
$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="miniproject";
if(isset($_POST['b1']))
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
			<th>Student name</th>
			<th>Registration no.</th>
			<th>Date of birth</th>
			<th>Email</th>
			<th>Phone no.</th>
			<th>Gender</th>
		</tr>
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo"<tr>
			<td>".$result['studentname']."</td>
			<td>".$result['registrationno']."</td>
			<td>".$result['dob']."</td>
			<td>".$result['email']."</td>
			<td>".$result['phoneno']."</td>
			<td>".$result['gender']."</td>

		</tr>";

	}
}
}
?>
</table></div>
</center>
</body>
</html>