		<?php include 'header.php';?>
		<?php 
			if (!$con)
			  {
				die('<font color="red">数据库异常</font>');
			  }
		?>
		<div class="main">
			<div class="say">
				<?php include 'speech.php';?>
			</div>
	</body>
</html>
