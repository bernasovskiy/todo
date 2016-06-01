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
        <strong>Задача пользователя <?=$task['user_id']; ?></strong>
      </div>
      <div id="text" class="panel-body">
        <? if ($task['status'] == 0){ ?>
          <p><?=$task['text']; ?></p>
              <div style="display: inline-block">
                <form action="/add_session_task.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                  <input type="hidden" name="text" value="<?php echo $task['text']; ?>">
                  <input type="hidden" name="status" value="<?php echo $task['status']; ?>">
                  <input type="submit" class="btn btn-info" value="Выполнить сегодня">
                </form>
              </div>
              <div style="display: inline-block">
                <form action="/done.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                  <input type="submit" class="btn btn-success" value="Выполнена">
                </form>
              </div>
          <? } else { ?>
            <p><del><?=$task['text']; ?></del></p>
                <div style="display: inline-block">
                  <form action="/add_session_task.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                    <input type="hidden" name="text" value="<?php echo $task['text']; ?>">
                    <input type="hidden" name="status" value="<?php echo $task['status']; ?>">
                    <input type="submit" class="btn btn-info" value="Выполнить сегодня">
                  </form>
                </div>
                <div style="display: inline-block">
                  <form action="/undone.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                    <input type="submit" class="btn btn-warning" value="Не выполнена">
                  </form>
                </div>
        <? } ?>
      </div>
    </div>
  <? } ?>
  <!-- Область основного контента -->
</div>