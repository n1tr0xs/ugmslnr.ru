<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Погода</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Прогноз погоды </h3>
      <div id='forecast'>
        <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/forecast.html';  ?>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php';  ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';  ?>
</body>
</html>
