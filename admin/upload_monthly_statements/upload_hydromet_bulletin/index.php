<!DOCTYPE html>
<html lang="ru" dir="ltr">
  
<? $PAGE_NAME = "Администрирование - загрузка бюллетеня гидрометеорологического бюллетеня"; ?>

<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title><?= $PAGE_NAME; ?></title>
</head>

<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3><?= $PAGE_NAME; ?></h3>
      <form action="exec.php" method="post" enctype="multipart/form-data">
        <fieldset>
          <label for="month">Месяц</label>
          <select name="month" id="month">
            <option value="январь">январь</option>
            <option value="февраль">февраль</option>
            <option value="март">март</option>
            <option value="апрель">апрель</option>
            <option value="май">май</option>
            <option value="июнь">июнь</option>
            <option value="июль">июль</option>
            <option value="август">август</option>
            <option value="сентябрь">сентябрь</option>
            <option value="октябрь">октябрь</option>
            <option value="ноябрь">ноябрь</option>
            <option value="декабрь">декабрь</option>
          </select>

          <label for="year">Год</label>
          <input type="number" name="year" id="year">

          <div class='file-drop-area span2'>
            <span class="fake-btn">Выберите файл</span>
            <span class="file-msg" id="file-msg">или перетащите файл сюда</span>
            <input type="file" name="fileToUpload" class="file-input" id="file-input" accept=".pdf" required>
          </div>
          <button type="submit">Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>