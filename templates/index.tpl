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
        {if $smarty.session.login eq ''}
            {include 'index_empty.tpl'}
            {elseif $smarty.session.login eq 'admin'}
              {include 'index_admin.tpl'}
            {else}
              {include 'index_default.tpl'}
        {/if}

        {if $pages gt 1}
          <nav>
            <ul class="pagination">
              <li>
          {for $i=1 to $pages}
            <a href="/index.php?page={$i}">{$i}</a>
          {/for}
              </li>
            </ul>
          </nav>
        {/if}

        <footer>
          <p class="text-center">&copy; Bernasovskiy, 2016</p>
        </footer>

      </div>
    </div>
  </body>
</html>