<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <meta name="description" content="Прмеры запросов в УГМС по ЛНР">
  <title>Образцы писем-запросов</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2>Образцы писем-запросов</h2>
      <div>
        <ul>
          <? 
          $path = "/files/request_samples/";
          $ext = ".doc";
          $files = get_files($path, $ext); 
          foreach($files as $path => $name){ ?>
            <li> <a target="_blank" href="<?=$path?>"><?=$name?></a></li>
          <? } ?>
        </ul>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>