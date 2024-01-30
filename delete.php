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
window.location="teacherlogin2.php";
}
</script>
<body>
	<br><br><br><br><br><center><div class="div1">Delete registered student<br></div>
	<form action="delete.php" method="post">
	<div class="div2">
		Registration no. <input class="a" type="text" name="t1" id="t1"><br><br>
		<input class="s" type="button" name="b1" value="Back" onclick="back()">
		<input class="s" type="submit" name="b2" value="Delete">
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
$query="DELETE FROM result1 WHERE registrationno='$t1'";
if(mysqli_query($conn,$query))
{
	echo'<script>alert("Deleted successfully")</script>';
}
else
{
	echo'<script>alert("Not Deleted")</script>';
}
}
?>
</center>
</body>
</html>