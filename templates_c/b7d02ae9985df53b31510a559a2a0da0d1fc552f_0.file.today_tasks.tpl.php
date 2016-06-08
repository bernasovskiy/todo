<?php
/* Smarty version 3.1.28, created on 2016-06-08 14:16:03
  from "F:\OpenServer\domains\localhost\templates\today_tasks.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5757fe735f7119_06728738',
  'file_dependency' => 
  array (
    'b7d02ae9985df53b31510a559a2a0da0d1fc552f' => 
    array (
      0 => 'F:\\OpenServer\\domains\\localhost\\templates\\today_tasks.tpl',
      1 => 1465384166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757fe735f7119_06728738 ($_smarty_tpl) {
?>
<html>
  <head>
    <title>ToDo</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <div id="header">
      <div id="tasks" class="col-md-10 col-md-offset-1">
        <h1><p class="text-center">ToDo's</p></h1>
        </br>

		<div id="popup_menu">
			<p class="text-right">
			<a class="btn btn-info" href="/" role="button">На главную</a>
			</p>
		</div>

            <div id="content">
          <!-- Область основного контента -->
          	<?php
$_from = $_smarty_tpl->tpl_vars['tasks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_task_0_saved_item = isset($_smarty_tpl->tpl_vars['task']) ? $_smarty_tpl->tpl_vars['task'] : false;
$_smarty_tpl->tpl_vars['task'] = new Smarty_Variable();
$__foreach_task_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_task_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$__foreach_task_0_saved_local_item = $_smarty_tpl->tpl_vars['task'];
?>
				<div class="panel panel-info">
					<div id="id" class="panel-heading">
						<strong>Задача <?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</strong>
					</div>
					<div id="text" class="panel-body">
		                <p><?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
</p>
							<form action="/delete_session_task.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
								<input type="submit" class="btn btn-warning" value="Убрать из задач на сегодня">
							</form>
					</div>
				</div>
			<?php
$_smarty_tpl->tpl_vars['task'] = $__foreach_task_0_saved_local_item;
}
}
if ($__foreach_task_0_saved_item) {
$_smarty_tpl->tpl_vars['task'] = $__foreach_task_0_saved_item;
}
?>
			</div>

        <footer>
          <p class="text-center">&copy; Bernasovskiy, 2016</p>
        </footer>

      </div>
    </div>
  </body>
</html><?php }
}
