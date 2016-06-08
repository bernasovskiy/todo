<?php
/* Smarty version 3.1.28, created on 2016-06-08 13:27:07
  from "F:\OpenServer\domains\localhost\templates\index_empty.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5757f2fbaae8f1_53826790',
  'file_dependency' => 
  array (
    '07c6374d4176231903baa7c3a58e3a834a1ac0d9' => 
    array (
      0 => 'F:\\OpenServer\\domains\\localhost\\templates\\index_empty.tpl',
      1 => 1465381626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757f2fbaae8f1_53826790 ($_smarty_tpl) {
?>
<form action="login.php" method="POST">
  <div id="login-form" class="form-group">
    <p class="text-right">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <input type="submit" class="btn btn-primary" value="Войти"></br></br>
    <a class="btn btn-primary" href="register.php" role="button">Регистрация</a>
    </p>
  </div>
</form>

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
        <p><?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
</p>
      </div>
    </div>
  <?php
$_smarty_tpl->tpl_vars['task'] = $__foreach_task_0_saved_local_item;
}
}
if ($__foreach_task_0_saved_item) {
$_smarty_tpl->tpl_vars['task'] = $__foreach_task_0_saved_item;
}
}
}
