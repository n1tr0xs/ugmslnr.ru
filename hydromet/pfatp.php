<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Вероятностный прогноз температуры воздуха и осадков">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Вероятностный прогноз температуры воздуха и осадков</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2> Вероятностный прогноз температуры воздуха и осадков </h2>
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
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
