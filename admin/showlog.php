<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");
include("../database.php");
{

		$sql=mysqli_query($con,"CALL ShowLogs()");	
		echo "<table class='table table-striped'>";
		echo"<h1 class='text-center bg-danger'>Logs</h1>";
		echo "<tr>
	<th class='text-primary'>Name</th>
	<th class='text-primary'>Action</th>
	<th class='text-primary'>Timestamp</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
	
	echo "<tr>";	
	echo "<td>".$result['Lname']. "</td>";
	echo "<td>".$result['Laction']."</td>";
	echo "<td>".$result['Ltimestamp']."</td>";
	echo "</tr>";
	echo"</div>";
	}
	echo "</table>";
		
}

?>