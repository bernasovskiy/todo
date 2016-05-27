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

        <!-- Меню администратора -->
        <? switch ($_SESSION['login']){
            case '':?>
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
              <? break;
            case 'admin':?>
              <div id="popup_menu">
                <p class="text-right">
                <a class="btn btn-primary" href="new_task.php" role="button">Добавить статью</a>
                <a class="btn btn-danger" href="delete.php" role="button">Удалить выполненные задачи</a>
                <a class="btn btn-danger" href="logout.php" role="button">Выход</a>
                </p>
              </div>
              <? break;
            default:?>
              <div id="popup_menu">
                <p class="text-right">
                <a class="btn btn-primary" href="new_task.php" role="button">Добавить статью</a>
                <a class="btn btn-danger" href="logout.php" role="button">Выход</a>
                </p>
              </div>
        <? } ?>
        <!-- Меню администратора -->

        <div id="content">
          <!-- Область основного контента -->
          <? foreach ($tasks as $task) { ?>
            <div class="panel panel-info">
              <div id="id" class="panel-heading">
                <strong>Задача <?=$task['id']; ?></strong>
              </div>
              <div id="text" class="panel-body">
                <? if ($task['status'] == 0){ ?>
                <p><?=$task['text']; ?></p>
                <? if (($_SESSION['login']) == 'admin'){ ?>
                <p class="text-right">
                  <a href="/update.php?id=<?=$task['id']; ?>" class="btn btn-info">Изменить</a>
                </p>
                <? } ?>
                <form action="/done.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                  <input type="submit" class="btn btn-success" value="Выполнена">
                </form> <? } else { ?>
                <p><del><?=$task['text']; ?><del></p>
                <? if (($_SESSION['login']) == 'admin'){ ?>
                <p class="text-right">
                  <a href="/update.php?id=<?=$task['id']; ?>" class="btn btn-info">Изменить</a>
                </p>
                <? } ?>
                <form action="/undone.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                  <input type="submit" class="btn btn-warning" value="Не выполнена">
                </form> <? } ?>
              </div>
            </div>
          <? } ?>
          <!-- Область основного контента -->
        </div>

        <? if ($pages>1){ ?>
            <nav>
              <ul class="pagination">
                <li>
          <? for($i = 1; $i <= $pages; $i++){ ?>
            <a href="/index.php?page=<?= $i ?>"><?= $i ?></a>
        <? } ?>
                </li>
              </ul>
            </nav>
          <? } ?>

        <footer>
          <p class="text-center">&copy; Bernasovskiy, 2016</p>
        </footer>

      </div>
    </div>
  </body>
</html>