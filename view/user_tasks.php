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
              <a class="btn btn-info" href="today_tasks.php" role="button">Задачи на сегодня</a>
              <a class="btn btn-info" href="user_tasks.php" role="button">Мои задачи</a>
              <a class="btn btn-info" href="index.php" role="button">Все задачи</a>
            </p>
          </div>
          <div id="popup_menu">
            <p class="text-right">
            <a class="btn btn-primary" href="new_task.php" role="button">Добавить задачу</a>
            <a class="btn btn-danger" href="logout.php" role="button">Выход</a>
            </p>
          </div>

          <div id="content">
            <!-- Область основного контента -->
            <? foreach ($tasks as $task) { ?>
              <div class="panel panel-info">
                <div id="id" class="panel-heading">
                 <strong>Задача <?=$task['user_id']; ?></strong>
                </div>
                <div id="text" class="panel-body">
                  <?if ($task['status'] == 0){ ?>
                  <p><?=$task['text']; ?></p>

                    <form action="/add_session_task.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                      <input type="hidden" name="text" value="<?php echo $task['text']; ?>">
                      <input type="hidden" name="status" value="<?php echo $task['status']; ?>">
                      <input type="submit" class="btn btn-info" value="Выполнить сегодня">
                    </form>
                  <div style="display: inline-block">
                    <form action="/done.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                      <input type="submit" class="btn btn-success" value="Выполнена">
                    </form>
                  </div>
                  <div style="display: inline-block">
                    <a href="/update.php?id=<?=$task['id']; ?>" class="btn btn-primary">Изменить</a>
                  </div>
                  <? } else { ?>
                    <p><del><?=$task['text']; ?></del></p>

                    <form action="/add_session_task.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                      <input type="hidden" name="text" value="<?php echo $task['text']; ?>">
                      <input type="hidden" name="status" value="<?php echo $task['status']; ?>">
                      <input type="submit" class="btn btn-info" value="Выполнить сегодня">
                    </form>
                    <div style="display: inline-block">
                      <form action="/undone.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                        <input type="submit" class="btn btn-warning" value="Не выполнена">
                      </form>
                    </div>
                    <div style="display: inline-block">
                      <a href="/update.php?id=<?=$task['id']; ?>" class="btn btn-primary">Изменить</a>
                    </div>
                  <? } ?>
                </div>
              </div>
            <? } ?>
            <!-- Область основного контента -->
          </div>

        <footer>
          <p class="text-center">&copy; Bernasovskiy, 2016</p>
        </footer>

      </div>
    </div>
  </body>
</html>