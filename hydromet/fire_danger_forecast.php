<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Прогноз пожароопасности</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Прогноз пожароопасности</h3>
      <div class='text-center'>
        <img src="/updatable/fire_danger.png" alt="Пожарная опасность" class='no-border' width="700px">
      </div>
      <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/fire_forecast.html'; ?>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
