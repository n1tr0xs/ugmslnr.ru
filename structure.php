<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"> </script>
    <script src="/js/structure.js"></script>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/structure.css">
    <title>Структура</title>
</head>
<body>
  <? include 'header.php'; ?>
  <div class='content'>

    <div class='department'>
      <a href='#unit1' class='show'> Отдел 1</a>
      <div id='unit1' class='unit'>
        <div class='employee'>
          <p> ФИО 1 </p>
          <p> Должность 1 </p>
        </div>
        <div class='employee'>
          <p> ФИО 2 </p>
          <p> Должность 2 </p>
        </div>
        <div class='employee'>
          <p> ФИО 3 </p>
          <p> Должность 3 </p>
        </div>
      </div>
    </div>

  </div>
  <? include 'footer.php'; ?>
</body>
</html>
