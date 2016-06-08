<?php
/* Smarty version 3.1.28, created on 2016-06-08 14:06:39
  from "F:\OpenServer\domains\localhost\templates\update.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5757fc3fecc304_45340445',
  'file_dependency' => 
  array (
    '11e43e236c105abc9a3eecb17440f687e334ec3a' => 
    array (
      0 => 'F:\\OpenServer\\domains\\localhost\\templates\\update.tpl',
      1 => 1465383968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757fc3fecc304_45340445 ($_smarty_tpl) {
?>
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
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
							<label>Задача: </label></br>
							<textarea class="form-control" rows="3" name="text" type="text"><?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
</textarea></br>
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
</html><?php }
}
