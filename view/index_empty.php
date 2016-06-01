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
  <? foreach ($tasks as $task) { ?>
    <div class="panel panel-info">
      <div id="id" class="panel-heading">
        <strong>Задача пользователя <?=$task['user_id']; ?></strong>
      </div>
      <div id="text" class="panel-body">
        <p><?=$task['text']; ?></p>
      </div>
    </div>
    <? } ?>
