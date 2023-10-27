<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <meta name="description" content="Главная страница УГМС по ЛНР">  
  <title>Администрирование - результат отправки данных</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
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
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
