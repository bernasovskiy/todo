<?php
/* Smarty version 3.1.28, created on 2016-06-08 14:06:18
  from "F:\OpenServer\domains\localhost\templates\register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5757fc2a015097_33802166',
  'file_dependency' => 
  array (
    'e8f1faf781c2a88266a7eaf461cb1f860bac4438' => 
    array (
      0 => 'F:\\OpenServer\\domains\\localhost\\templates\\register.tpl',
      1 => 1465383828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757fc2a015097_33802166 ($_smarty_tpl) {
?>
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
						<form class="text-center" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST">
							<h3><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</h3></br>
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
</html><?php }
}
