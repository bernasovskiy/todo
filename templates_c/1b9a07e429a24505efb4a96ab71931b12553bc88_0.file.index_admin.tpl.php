<?php
/* Smarty version 3.1.28, created on 2016-06-08 14:06:32
  from "F:\OpenServer\domains\localhost\templates\index_admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5757fc383624c8_11713427',
  'file_dependency' => 
  array (
    '1b9a07e429a24505efb4a96ab71931b12553bc88' => 
    array (
      0 => 'F:\\OpenServer\\domains\\localhost\\templates\\index_admin.tpl',
      1 => 1465382130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757fc383624c8_11713427 ($_smarty_tpl) {
?>
<div id="popup_menu">
  <p class="text-right">
    <a class="btn btn-info" href="today_tasks.php" role="button">Задачи на сегодня</a>
    <a class="btn btn-info" href="user_tasks.php" role="button">Мои задачи</a>
    <a class="btn btn-info" href="index.php" role="button">Все задачи</a>
  </p>
</div>
<div id="popup_menu">
  <p class="text-right">
  <a class="btn btn-primary" href="new_task.php" role="button">Добавить задачу</a>
  <a class="btn btn-danger" href="delete.php" role="button">Удалить выполненные задачи</a>
  <a class="btn btn-danger" href="logout.php" role="button">Выход</a>
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
       <strong>Задача пользователя <?php echo $_smarty_tpl->tpl_vars['task']->value['user_id'];?>
</strong>
      </div>
      <div id="text" class="panel-body">
        <?php if ($_smarty_tpl->tpl_vars['task']->value['status'] == 0) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
</p>

        <div style="display: inline-block">
          <form action="/add_session_task.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
            <input type="hidden" name="text" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
">
            <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['status'];?>
">
          </form>
        </div>
        <div style="display: inline-block">
          <form action="/done.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
            <input type="submit" class="btn btn-success" value="Выполнена">
          </form>
        </div>
        <div style="display: inline-block">
          <a href="/update.php?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn btn-primary">Изменить</a>
        </div>
        <?php } else { ?>
          <p><del><?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
</del></p>

          <div style="display: inline-block">
            <form action="/add_session_task.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
              <input type="hidden" name="text" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
">
              <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['status'];?>
">
            </form>
          </div>
          <div style="display: inline-block">
            <form action="/undone.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
              <input type="submit" class="btn btn-warning" value="Не выполнена">
            </form>
          </div>
          <div style="display: inline-block">
            <a href="/update.php?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn btn-primary">Изменить</a>
          </div>
        <?php }?>
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
  <!-- Область основного контента -->
</div><?php }
}
