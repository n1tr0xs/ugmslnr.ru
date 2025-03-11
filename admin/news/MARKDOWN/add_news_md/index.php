<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - создание новости MD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - создание новости MD</h3>
      <div id="output" class="output" style="min-height: 50px;"></div>
      <div class='clear'></div>
      <hr>
      <form action="exec.php" method="post">
        <fieldset>
          <label for="inp">Заголовок новости</label>
          <input type="text" id="inp" name="news-title"
            ondbclick="this.select()" oninput="translit(this.value, 'out');" onchange="translit(this.value, 'out');"
          />
          <br>
          <textarea id="out" cols="90" name="news-name" required=""> </textarea>
        </fieldset>
          <textarea cols="100" id="easymde-editor"></textarea>
          <button>Отправить данные</button>
      </form>
      <script> var easyMDE = new EasyMDE({ element: document.getElementById('easymde-editor') }); </script>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
