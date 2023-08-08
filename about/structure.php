<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="/js/jquery.min.js"> </script>
    <script src="/js/structure.js"></script>
    <link rel="stylesheet" href="/css/master.css">
    <title>Структура</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <div class='text-center'>
        <img class="no-border auto-scaled-img" src="/files/imgs/structure.jpg">
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php';  ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';  ?>
</body>
</html>
