
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>piXel</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript" src="jscolor/jscolor.js">
</script>
<script type="text/javascript">
function fun()
{
var v1 = document.getElementById("colo").value;
document.getElementById("pix").style.background="#"+v1;
document.getElementById("topc").style.background="#"+v1;
document.getElementById("fnt").color=v1;

}
</script>
</head>
<body bgcolor="white">




<div class="top">
<div class="topp" id="topc">
</div>
<div class="logo">
<a href="slideshow.php"><font size="100%" color="#ffffff">X</font></a>
</div>
<table align="right">
<form action="log_handler.php" method="post"> 
<tr><td><table>
<tr><td><font color="white">Username</font></td><td><font color="white">Password</font></td></tr>
<tr><td><input type="text" id="x1" name="uname" ></td><td><input id="x2" type="password" name="pwd"></td></tr>
<tr><td></td><td><u>Forgot password??</u></td></tr>
</table></td><td><input type="submit" value="Login"></td></tr></table>
</form>
</div>

<div class="pixel" align="center" >
<div class="pixxel" id="pix" >
</div>
<font color="white" size="100%"><br/><br/>piXels</font>
<br/><br/><hr><h2><font color="white">Browse.. Share.. Connect..</font></h2>
</div>

<div class="accordian">
	<ul>
		<li>
			<div class="image_title">
				<a href="#">KungFu Panda</a>
			</div>
			<a href="#">
				<img src="panda.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Toy Story 2</a>
			</div>
			<a href="#">
				<img src="toy.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Wall-E</a>
			</div>
			<a href="#">
				<img src="wall.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Up</a>
			</div>
			<a href="#">
				<img src="up.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Cars 2</a>
			</div>
			<a href="#">
				<img src="car.jpg"/>
			</a>
		</li>
	</ul>
</div>

<div class="sig">
<h2><font color="#692020">Don't have an account?</font></h2><h2><font color="#692020" id="fnt">Quick Sign Up..</font></h2><hr><hr>
<table width="65%">
<br>
<form method="post" action="signup_handler.php">
<tr><td align="left"><b><font family="calibri" size="3.5px">Your Name:</font></b></td><td><input type="text" name="uname"></td></tr>
<tr><td align="left"><b><font family="calibri" size="3.5px">Last Name:</font></b></td><td><input type="text" name="lname"></td></tr>
<tr><td align="left"><b><font family="calibri" size="3.5px">Your email:</font></b></td><td><input type="text" name="email"></td></tr>
<tr><td align="left"><b><font family="calibri" size="3.5px">New Password:</font></b></td><td><input type="password" name="pwd"></td></tr><br>
</table>
<table><tr><td><b><font family="calibri" size="3.5px">Favourite Colour:</font></b></td><td>    <input class="color" value="cccccc" id="colo" name="colour"/></td></tr></table><br>
<table><tr><td><b><font family="calibri" size="3.5px">Birthday:</font></b></td><td>                   <select name="n1" default="date">
<option value="-1" >date</option>
<option value="" >1</option>
<option value="" >2</option>
<option value="" >3</option>
<option value="" >4</option>
<option value="" >5</option>
<option value="" >6</option>
<option value="" >7</option>
<option value="" >8</option>
<option value="" >9</option>
<option value="" >10</option>
<option value="" >11</option>
<option value="" >12</option>
<option value="" >13</option>
<option value="" >14</option>
<option value="" >15</option>
<option value="" >16</option>
<option value="" >17</option>
<option value="">18</option>
<option value="" >19</option>
<option value="" >20</option>
<option value="" >21</option>
<option value="" >22</option>
<option value="" >23</option>
<option value="" >24</option>
<option value="" >25</option>
<option value="" >26</option>
<option value="" >27</option>
<option value="" >28</option>
<option value="" >29</option>
<option value="" >30</option>
<option value="" >31</option>
</td>
<td><select name="n2" value="month">
<option value="-1" >month</option>
<option value="1" >Janruary</option>
<option value="2">February</option>
<option value="" >March</option>
<option value="" >April</option>
<option value="" >May</option>
<option value="" >June</option>
<option value="" >July</option>
<option value="" >August</option>
<option value="" >September</option>
<option value="" >October</option>
<option value="" >November</option>
<option value="" >December</option>

</td>
<td>
<select name="n3" value="year">
<option value="-1">Year:</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option>
</td>
</tr></table>
<hr>
<table width=50% id="signup" onclick="fun()">
<tr>
<br>
<br>
<td align="center" bgcolor="#39C146"><font color="white"><input bgcolor="#39C146" type="submit" value="SignUp"/></font></td></tr>
</table>
</form>
</div>




</body>
</html>