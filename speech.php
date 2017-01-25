<?php
	include 'dbc.php';
	if (!$con){
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("courtwall", $con);
	$result = mysql_query("SELECT * FROM speech ORDER BY id DESC");
	while($row = mysql_fetch_array($result)){
		echo "<div class=\"speech\"><p>".$row['content'] ."</p><br/><p class=\"info\">#".$row['id']." ".$row['name']." 来自班级".$row['class']." <span style=\"color:#b9afaf;\">".$row['dateandtime']."</span></p></div>";
	}
	mysql_close($con);
?>
