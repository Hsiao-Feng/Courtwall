<?php
	if (!$con){
	  die('Could not connect');
	}
	$result = mysqli_query($con, "SELECT * FROM speech ORDER BY id DESC");
	while($row = mysqli_fetch_array($result)){
		echo "<div class=\"speech mb-4\"><p>".$row['content'] .
		"</p><br/><p class=\"info\">#".$row['id'].
		"&nbsp;<strong>".$row['name']."</strong>&nbsp;来自<strong>".$row['class']."</strong>&nbsp;<span style=\"color:#b9afaf;\">".$row['dateandtime']."</span></p></div>";
	}
	mysqli_close($con);
?>