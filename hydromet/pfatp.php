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
      <h3 > Вероятностный прогноз температуры воздуха и осадков </h3>
      <?
      $sql = "select * from `ugmslnr`.`pfatp` order by `date` desc limit 1";
      $row = get_row($conn, $sql);      
      ?>
      <p class='day'>Прогноз на <? echo date("d.m.Y", strtotime($row['date'])); ?></p>
      <p class='description'> <? echo $row['desc']; ?></p>
      <p style='font-style: italic;'> Примечание:  </p>
      <p> Вероятностный прогноз температуры и осадков составлен специалистами ФГБУ «Гидрометцентр России».</p>
      <p> <a href='https://meteoinfo.ru/1month-forc'>https://meteoinfo.ru/1month-forc</a> </p>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
