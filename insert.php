<?php include 'header.php';?>
	<body>
		<div class="header">
			<h1>Court Wall of School - POST PAGE</h1>
		</div><hr/>
		<?php date_default_timezone_set("PRC");

			include 'dbc.php';
			$name=$_POST['name'];
			$class=$_POST['class'];
			$content=$_POST['content'];
			$name=htmlspecialchars($name);
			$class=htmlspecialchars($class);
			$content=htmlspecialchars($content);
			if($_POST['content']==""){
				echo '<h2>您未填写发布内容！</h2>';
			}else if($_POST['name']==""){
				$name='匿名';
			}else if($_POST['class']==""){
				$class='未知';
			}
			
			if(!$_POST['content']==""){
				if (!$con)
				  {
					echo '<font color="red" size="48">数据库异常！<br/>请联系网络管理员！</font>';
				  }
				$dateandtime=date("Y-m-d H:i:s");
				mysql_select_db("courtwall", $con);
				$sql="INSERT INTO speech (content, name, class, dateandtime)
				VALUES
				('$content','$name','$class','$dateandtime')";
				if (!mysql_query($sql,$con)){
					echo '<font color="red" size="48">数据库异常！<br/>请联系网络管理员！</font>';
				}else{
				echo "<h2>内容已提交！</h2>";
				}
				mysql_close($con);
			}
		?>
	</body>
</html>