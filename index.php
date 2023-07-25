<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="/js/funcs.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
        var min_news = 1;
        var max_news = 0;
        var folder = '/news/short_news/';
        var div = document.getElementById('news-container');
        for(let i=max_news; i>=min_news; --i) {
          let fileName = 'short_news' + i + '.php';
          div.innerHTML += loadFile(folder + fileName);
        }
      }, false);
    </script>
    <link rel="stylesheet" href="/css/master.css">
    <style>
    
    </style>
    <title>УГМС по ЛНР - Федеральное государственное бюджетное учреждение</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ; ?>
  <div id='content'>
    <h1> Последние новости </h1>
    <div id='news-container'>
    </div>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php';  ?>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';  ?>
</body>
</html>
