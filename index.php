<?php include 'header.php';?>
	<body>
		<?php 
			include 'dbc.php';
			if (!$con)
			  {
				echo '<font color="red" size="48">服务器无法连接数据库！<br/>请联系网络管理员！</font>';
			  }
		?>
		<div class="header">
			<h1>Court Wall of School</h1>
			<a href="form.php" target="_blank">发布消息</a>
		</div>
		<hr/>
		<div class="main">
			<div class="say">
				<?php include 'speech.php';?>
			</div>
	</body>
</html>