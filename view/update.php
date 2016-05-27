<html>
  <head>
    <title>ToDo</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<h1><p class="text-center">Изменить задачу</p></h1><br>

					<div>
						<form action="/update.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $task['id']; ?>">
							<label>Задача: </label></br>
							<textarea class="form-control" rows="3" name="text" type="text"><?=$task['text'];?></textarea></br>
							<input class="btn btn-info" type="submit" value="Изменить"></br></br>
							<a class="btn btn-info" href="index.php" role="button">На главную</a>
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