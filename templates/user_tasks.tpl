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
            {foreach from=$tasks item=task}
              <div class="panel panel-info">
                <div id="id" class="panel-heading">
                 <strong>Задача пользователя {$task['user_id']}</strong>
                </div>
                <div id="text" class="panel-body">
                  {if $task['status'] eq 0}
                  <p>{$task['text']}</p>

                  <div style="display: inline-block">
                    <form action="/add_session_task.php" method="POST">
                      <input type="hidden" name="id" value="{$task['id']}">
                      <input type="hidden" name="text" value="{$task['text']}">
                      <input type="hidden" name="status" value="{$task['status']}"
                      <input type="submit" class="btn btn-info" value="Выполнить сегодня">
                    </form>
                  </div>
                  <div style="display: inline-block">
                    <form action="/done.php" method="POST">
                      <input type="hidden" name="id" value="{$task['id']}">
                      <input type="submit" class="btn btn-success" value="Выполнена">
                    </form>
                  </div>
                    {if $user_id eq '1'}
                    <div style="display: inline-block">
                      <a href="/update.php?id={$task['id']}" class="btn btn-primary">Изменить</a>
                    </div>
                    {/if}
                  {else}
                    <p><del>{$task['text']}</del></p>

                    <div style="display: inline-block">
                      <form action="/add_session_task.php" method="POST">
                        <input type="hidden" name="id" value="{$task['id']}">
                        <input type="hidden" name="text" value="{$task['text']}">
                        <input type="hidden" name="status" value="{$task['status']}">
                        <input type="submit" class="btn btn-info" value="Выполнить сегодня">
                      </form>
                    </div>
                    <div style="display: inline-block">
                      <form action="/undone.php" method="POST">
                        <input type="hidden" name="id" value="{$task['id']}">
                        <input type="submit" class="btn btn-warning" value="Не выполнена">
                      </form>
                    </div>
                    {if $user_id eq '1'}
                    <div style="display: inline-block">
                      <a href="/update.php?id={$task['id']}" class="btn btn-primary">Изменить</a>
                    </div>
                    {/if}
                  {/if}
                </div>
              </div>
            {/foreach}
            <!-- Область основного контента -->
          </div>

        <footer>
          <p class="text-center">&copy; Bernasovskiy, 2016</p>
        </footer>

      </div>
    </div>
  </body>
</html>