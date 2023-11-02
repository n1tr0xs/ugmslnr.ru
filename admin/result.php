<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <meta name="description" content="Главная страница УГМС по ЛНР">  
  <title>Администрирование - результат отправки данных</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <? 
      $_file = $_POST['file'];
      echo $_file;       
      if($_POST['resp']) { ?>
        <p style='color: green'>Данные отправлены.</p>
      <? } else { ?>
        <p style='color: red'>Ошибка отправки данных.</p> 
      <? } ?>
      <p><a href='/index.php'>Главная страница сайта</a></p>
      <p><a href='/admin/<?=$_file?>.php'>Страница администрирования</a></p>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
