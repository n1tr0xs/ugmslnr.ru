<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="/js/funcs.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
        var min_news = 1;
        var max_news = 5;
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
    #content {
      float: left;
      width: 75%;
    }
    #aside-content {
      float: right;
      width: 25%;
      text-align: center;
    }
    #aside-content li {
      text-align: left;
    }
    .list-name {
      margin: 0;
      border-bottom: 2px solid var(--border-color);
    }
    </style>
    <title>УГМС по ЛНР - Федеральное государственное бюджетное учреждение</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ; ?>
  <div id='content'>
    <h1> Последние новости </h1>
    <div id='news-container'>
    </div>
  </div>
  <div id='aside-content'>
    <hr>
    <span class='list-name'> Мониторинг загрязнения окружающей среды </span>
    <ul>
      <li> <a href='/epm/index.php'> Центр мониторинга загрязнения окружающей среды </a> </li>
      <li> <a href='#'> Загрязнение атмосферного воздуха </a> </li>
      <li> <a href='#'> Информация о неблагоприятных метеорологических условиях (НМУ) </a> </li>
      <li> <a href='#'> Радиационная обстановка </a> </li>
      <li> <a href='#'> Критерии качества компонентов природной среды </a> </li>
      <li> <a href='#'> Ежемесячный обзор состояния окружающей среды </a> </li>
    </ul>
    <hr>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';  ?>
</body>
</html>
