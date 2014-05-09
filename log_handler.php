

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>piXel</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>


<?php
$uname_chk=$_POST["uname"];
$pwd_chk=$_POST["pwd"];
if(empty($uname_chk)||empty($pwd_chk))
echo "Any Field cannot be left balnk.";
else
{
mysql_connect("localhost","root","buttercup");
mysql_select_db("pixels");
$rs=mysql_query("select count(name) from user");
$row=mysql_fetch_array($rs);
$number=$row[0];
$rs=mysql_query("select name, password from user");
for($i=1;$i<=$number;$i++)
{
	$row=mysql_fetch_array($rs);
	if(strcmp($uname_chk,$row['name'])==0)
	{
		if(strcmp($pwd_chk,$row['password'])==0)
		{
			echo "Login Successful";
			
			$_SESSION["user"]=$uname_chk;
			$_SESSION["login"]="YES";
			
			$_SESSION["order"]=$row["Order_id"];
		}
		else
			echo "Incorrect Password Please Try Agian";
		break;
	}
}
if($i==($number+1))
	echo "Sorry You Have Not Yet Registered";
mysql_close();
}
?>
<div class="top2" align="center">
<font size="100%" color="#ffffff">piXels</font>
<div class="topp2">
</div>
<div class="logo">
<a href="slideshow.php"><font size="100%" color="#ffffff">X</font></a>
</div>

</div>

<div class="profilepic">
<table width="100%" height="100%" border="2px">
    <a href="file:///C:/Users/Dhruv/Documents/piXels/untitled.jpg">
     <div class="pic">
  
     </div> 
     </a>
</table>
</div>
<div class="name">
<h1>   <?php echo $_POST['uname']; ?></h1>
</div>
<div class="collage">
</div>
<div class="chat" align="center">
<br>
<br>
<br>
<font face="calibri" color="#ccc"><h2>Chat under construction..</h2></font>
</div>
<div class="navigate">
</div>
<a href="discussion.php">
<div class="discussion" align="center">
<hr>
<font face="calibri" color="white"><h1>Discussion Forum</h1></font>
<hr>
<hr>
<hr>
<hr>
<br><br><br>
<hr>
<br><br><br>
<hr>
<br><br><br>
<hr>
</div></a>

</body>