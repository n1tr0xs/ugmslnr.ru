<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <meta name="description" content="Прмеры запросов в УГМС по ЛНР">
  <title>Образцы писем-запросов</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
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
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>