<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Прогноз пожароопасности</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Прогноз пожароопасности</h3>
      <div class='text-center'>
        <img src="/updatable/fire_danger.png" alt="Пожарная опасность" class='no-border'>
      </div>
      <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/fire_forecast.html'; ?>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
