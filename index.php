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
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	</body>
</html>
