<?php include 'header.php';?>
	<body>
		<?php 
			include 'dbc.php';
			if (!$con)
			  {
				die('<font color="red" size="48">服务器无法连接数据库！<br/>请联系网络管理员！</font>');
			  }
		?>
		<div class="header">
			<h1>Court Wall of School - POST PAGE</h1>
		</div>
		<hr/>
		<div class="main">
			<form action="insert.php" method="post">
				留言内容<font color="red">（必填<font color="black"> 最多500字符</font>）</font>：<br/>
				<textarea rows="5" cols="40" name="content" maxlength="500"></textarea><br/><br/>
				姓名<font color="gray">（选填）</font>: <input type="text" name="name" /><br/><br/>
				班级<font color="gray">（选填）</font>: <input type="text" name="class" /><br/><br/>
				<input type="submit" value="提交"/>
			</form>
		</div>
	</body>
</html>
