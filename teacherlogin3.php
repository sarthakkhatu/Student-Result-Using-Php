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
font-size:20px;
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
function next()
{
var id=document.getElementById("t1").value;
var pass=document.getElementById("t2").value;
if(id=="user"&&pass=="password")
{
window.location="registration.php";
}
else if(id==0&&pass==0)
{
alert("Enter teacher id and password");
}
else if(id==0)
{
alert("Enter teacher id");
}
else if(pass==0)
{
alert("Enter password");
}
else
{
alert("Incorrect teacher id and password");
}
}
function back()
{
window.location="homepage.php";
}
</script>
</head>
<body>
<br><br><br><br><br><center><div class="div1">Teacher's login<br></div></center>
<center>
<div class="div2">
Teacher id: <input class="a" type="text" id="t1"><br><br>
Password: <input class="a" type="password" id="t2"><br><br>
<input class="s" type="button" name="b1" value="Back" onclick="back()">
<input class="s" type="button" name="b2" value="Submit" onclick="next()">
</center>
</div>
</center>
</body>
</html>