<?php include 'header.php';?>
		<?php
			if (!$con)
			  {
				die('<font color="red" size="48">服务器无法连接数据库！<br/>请联系网络管理员！</font>');
			  }
		?>
		<div class="main">
			<form action="insert.php" method="post">
				<div class="form-floating">
					<textarea required class="form-control" placeholder="留言内容" id="floatingTextarea2" style="height: 100px" name="content"></textarea>
					<label for="floatingTextarea2">留言内容</label>
				</div>
				<div class="input-group mb-3 mt-3">
				<span class="input-group-text">选填</span>
					<input name="name" type="text" class="form-control" placeholder="名字" aria-label="名字">
					<input name="class" type="text" class="form-control" placeholder="班级" aria-label="班级">
				</div>
				<button type="submit" class="btn btn-outline-primary">发送</button>
			</form>
		</div>
	</body>
</html>
