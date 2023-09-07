<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Вероятностный прогноз температуры воздуха и осадков</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Вероятностный прогноз температуры воздуха и осадков </h3>
      <p> Вероятностный прогноз температуры и осадков составлен специалистами ФГБУ «Гидрометцентр России».</p>
      <p> <a href='https://meteoinfo.ru/1month-forc'>https://meteoinfo.ru/1month-forc</a> </p>
      <table class='no-border text-left table-striped'>
        <? 
          $path = "/updatable/pfatp/";
          $ext = ".pdf";
          $files = get_files($path, $ext); 
          foreach($files as $path => $name){ ?>
            <tr><td><a target="_blank" href="<?=$path?>">  <?=$name?></a></td></tr>
          <? } ?>
      </table>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
