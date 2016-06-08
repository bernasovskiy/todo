<html>
	<head>
		<title>ToDo's</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<h1><p class="text-center">Регистрация нового пользователя</p></h1><br>

					<div>
						<form class="text-center" action="{$smarty.server.REQUEST_URI}" method="POST">
							<h3>{$err}</h3></br>
							<input type="text" name="login" placeholder="Логин">
							<input type="password" name="password" placeholder="Пароль"></br></br>
							<input type="submit" class="btn btn-info" value="Зарегистрироваться"></br></br>
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