<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - загрузка вложений для новости</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - загрузка вложений для новости</h3>    
      <div class="output" style="min-height: 50px;"></div>
      <form action="exec.php" method="post" enctype="multipart/form-data">
        <fieldset>
          <label>Заголовок новости</label>
          <input type="text" id="inp" ondbclick="this.select()" oninput="translit(this.value, 'out');" onchange="translit(this.value, 'out');"> </input>
          <br>
          <textarea id="out" style="width: 600px;" name="news-name" required> </textarea>
          <div class='file-drop-area span2'>
            <span class="fake-btn">Выберите файл</span>
            <span class="file-msg" id="file-msg">или перетащите файл сюда</span>
            <input type="file" name="files[]" class="file-input" id="file-input" accept="*" multiple required>
          </div>
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
