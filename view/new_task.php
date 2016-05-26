<html>
	<head>
		<title>Добавить задачу</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<h1><p class="text-center">ToDo's</p></h1><br>

				<!-- Заголовок -->
				<h3><?=$check?></h3>

					<div>
						<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
							<label>Новая задача: </label></br>
							<textarea class="form-control" rows="3" name="text" type="text[]" placeholder="Добавьте новую задачу"><?=$text?></textarea></br>
							<input type="submit" class="btn btn-success" value="Запостить">
						</form>
					</div>
			</div>
		</div>

		<div id="footer">
			<!-- Нижняя часть страницы -->
			<p class="text-center">&copy; Bernasovskiy, 2016</p>
			<!-- Нижняя часть страницы -->
		</div>
    </body>
</html>