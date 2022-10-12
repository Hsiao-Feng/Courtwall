<?php include 'header.php';?>
	<body>
		<?php 
			$name=$_POST['name'];
			$class=$_POST['class'];
			$content=$_POST['content'];
			$name=htmlspecialchars($name);
			$class=htmlspecialchars($class);
			$content=htmlspecialchars($content);
			if($_POST['content']==""){
				echo '<p>您未填写发布内容。</p>';
			}else if($_POST['name']==""){
				$name='匿名';
			}else if($_POST['class']==""){
				$class='未知';
			}
			
			if(!$_POST['content']==""){
				if (!$con)
				  {
					die('<font color="red">数据库异常</font>');
				  }
				$dateandtime=date("Y-m-d H:i:s");
				$sql="INSERT INTO speech (content, `name`, class, dateandtime)
				VALUES
				('$content','$name','$class','$dateandtime')";
				if (!mysqli_query($con, $sql)){
					die('<font color="red">数据库异常</font>');
				}else{
					header("Location: ./");
				}
				mysqli_close($con);
			}
		?>
	</body>
</html>
