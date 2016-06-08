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
          	{foreach from=$tasks item=task}
				<div class="panel panel-info">
					<div id="id" class="panel-heading">
						<strong>Задача {$task['id']}</strong>
					</div>
					<div id="text" class="panel-body">
		                <p>{$task['text']}</p>
							<form action="/delete_session_task.php" method="POST">
								<input type="hidden" name="id" value="{$task['id']}">
								<input type="submit" class="btn btn-warning" value="Убрать из задач на сегодня">
							</form>
					</div>
				</div>
			{/foreach}
			</div>

        <footer>
          <p class="text-center">&copy; Bernasovskiy, 2016</p>
        </footer>

      </div>
    </div>
  </body>
</html>