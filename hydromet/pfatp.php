<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Вероятностный прогноз температуры воздуха и осадков</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3 class='normal'> Вероятностный прогноз температуры воздуха и осадков </h3>
      <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/pfatp.html';  ?>
      <p style='font-style: italic;'> Примечание:  </p>
      <p> Вероятностный прогноз температуры и осадков составлен специалистами ФГБУ «Гидрометцентр России». В течение месяца прогнозы погоды будут корректироваться краткосрочными прогнозами погоды ФГБУ «УГМС по ЛНР». </p>
      <p> <a href='https://meteoinfo.ru/1month-forc'>https://meteoinfo.ru/1month-forc</a> </p>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php';  ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';  ?>
</body>
</html>
