<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>

<body style="background: radial-gradient(circle, rgba(109,184,0,1) 11%, rgba(2,120,7,1) 45%, rgba(1,36,0,1) 100%);">
<?php
include("header.php");
?>

<h1 style="margin-top:250px;color:black;" class="text-center" ><strong>Admin Login</strong></h1>
<form name="form1" method="post" action="login.php">
<table class="table table-striped">
  <table width="auto" border="0" align="center">
  <tr>
    <td width="163" class="style2" style="font-size:30px;margin:20px;"><strong>Login ID :</strong></td>
    <td width="149"><input class="form-control" name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2"style="font-size:30px;margin:20px;"><strong>Password :</strong></td>
    <td><input class="form-control" name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login">
    <a class="btn btn-danger text-light " href="../index.php">User Login</a><</td>
  </tr>
</table></td>
  </tr>
</table>

</form>

</body>
</html>
