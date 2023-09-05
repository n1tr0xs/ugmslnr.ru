<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
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
            <li> <a target="_blank" href="<?=$path?>">  <?=$name?></a></li>
          <? } >?
        </ul>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>