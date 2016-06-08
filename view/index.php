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
            case '':
            	require_once 'index_empty.php';
				      break;
            case 'admin':
				      require_once 'index_admin.php';
            	break;
            default:
            	require_once 'index_default.php';
        } ?>

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