<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Информация о неблагоприятных метеорологических условиях (НМУ)</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
  <div id='content'>
    <h3> Информация о неблагоприятных метеорологических условиях (НМУ) </h3>
    <p>
    К неблагоприятным метеорологическим условиям (НМУ) относятся условия, способствующие накоплению промышленных и автомобильных выбросов в приземном слое атмосферного воздуха. Для снижения уровня загрязнения в период возникновения НМУ на предприятия передаются информационные сообщения о возникновении НМУ, что соответствует режиму работ по регулированию выбросов.
    </p>
    <p><b>Прогноз НМУ:</b></p>
<? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/awc.html';  ?>

  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php';  ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';  ?>
</body>
</html>
