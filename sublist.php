<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");?>
<h1 class='text-center bg-danger'>Select Subject to Take up Exam</h1>
<div class="row">
<div class="col-md-6">
	<img src="onlineexamimage.png" style="width:600px;height:320px">
</div>
<div class="col-md-6">
<?php
include("database.php");
$rs=mysqli_query($con,"select * from subject");
	echo "<table class='table table-striped'>";
	while($row=mysqli_fetch_row($rs))
	{
		echo "<tr><td align=left ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
	}
	echo "</table>";

?>
</div>
</div>
</body>
</html>
