<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - комментарии синоптика</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Администрирование - комментарии синоптика</h3>
      <form action="exec.php" method="post">
        <fieldset>
          <label>Дата</label>
          <input type="date" name="date" value="<?=date('Y-m-d')?>" placeholder="Дата" required>        
          <label>Комментарий</label>
          <textarea name="comment" placeholder="Комментарий" rows="5" cols="50" required></textarea>          
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/index.php'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
