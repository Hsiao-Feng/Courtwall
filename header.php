<!DOCTYPE html>
<html>
<!-- 
	Powered by Courtwall v1.1
	CODE:    https://github.com/Hsiao-Feng/Courtwall
	AUTHOR:  Hsiao Feng
	LISENCE: BSD 2-Clause "Simplified" License
-->
<head>
	<meta charset="UTF-8">
	<?php require_once "settings.php" ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />
	<title><?= title ?></title>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="./"><?= title ?></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<a href="form.php" class="btn btn-outline-secondary">张贴消息</a>


			</div>
	</nav>
