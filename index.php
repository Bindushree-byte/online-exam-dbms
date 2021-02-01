<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to Online Portal</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body style="background: radial-gradient(circle, rgba(0,255,235,1) 28%, rgba(9,105,121,1) 74%, rgba(0,30,36,1) 100%);">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='text-center'><strong>Welcome to Online Exam</strong></h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4"><h1>Subject for Exam </h1></a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"></td>
    <td valign="bottom"> <a href="result.php" class="style4"><h1>Result</h1></a></td>
  </tr>
</table>';
   
		exit;
	
}
?>

<table width="100%" border="0">
  
  <tr>
    <td height="100" valign="top"><div align="center">
        <h1 class="style8"><strong>Welcome to Online Examination Portal</strong></h1>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
    </div></td>
    		<table align="center" border="0" WIDTH="50%" height="250">
			<h1 class="text-center "><strong>LOGIN PAGE</strong></h1>
		<form method="post" action="">
		<br>
	
		<tr>
			<th class="text">LOGIN ID</th>
			<th>
			<input class="form-control"type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
		</th>
		<tr>
			<th class="text">ENTER PASSWORD</th>
			<th><input class="form-control" type="password" name="pass" id="pass2"/></th>
			</tr>
					       <?php
		  if(isset($found))
		  {
		  	echo "<center><strong><p style='color:black;'>Invalid Username or Password</p></strong></center>";
		  }
		  ?>
          </span></td>
         <th></th>
				<th class="errors">
					<input class="btn btn-success "type="submit" name="submit" id="submit" Value="Login"/>
				
        <a class="btn btn-warning " href="signup.php">New user ? click here</a>
		<a class="btn btn-primary " href="admin/index.php">Admin Login</a></th>
      </table>
      <div align="center">
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>
