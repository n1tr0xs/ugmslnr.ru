<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <style>
    p.day {
      text-align: center;
    }
    p.description {
      text-indent: 0;
    }
    #forecast-text .day {
      font-weight: bold;
    }
    p.region {
      font-weight: bold;
    }
  </style>
  <title>Погода</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ; ?>
  <div id='containter'>
    <div id='content'>
      <div>
      </div>
      <div id='forecast-text'>
        <? include $_SERVER['DOCUMENT_ROOT'] . '/updatable/forecast.html';  ?>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php';  ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';  ?>
</body>
</html>
