<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <meta name="description" content="Главная страница УГМС по ЛНР">  
  <script>
    document.addEventListener('DOMContentLoaded', function(){
      const parser = new DOMParser();
      var min_news = 1;
      var max_news = 2;
      var folder = '/news/';
      var div = document.getElementById('news-container');
      for(let i=max_news; i>=min_news; --i) {
        let fileName = 'news' + i + '.php';
        const doc = parser.parseFromString(loadFile(folder+fileName), 'text/html');
        div.appendChild(doc.querySelector("div.news h2"));
        div.appendChild(doc.querySelector("div.news p"));
      }
    }, false);
  </script>
  <title>УГМС по ЛНР - Федеральное государственное бюджетное учреждение</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <div id='news-container'>
        <h1> Последние новости </h1>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
