<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <meta name="description" content="Главная страница УГМС по ЛНР">  
  <script>
    document.addEventListener('DOMContentLoaded', function(){
      const parser = new DOMParser();
      const min_news = 1;
      const max_news = 2;      
      const xhttp = new XMLHttpRequest();
      const div = document.getElementById('news-container');
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          const page = parser.parseFromString(xhttp.responseText, 'text/html');  
          div.appendChild(page.querySelector('div.news h2.news-title'));
          div.appendChild(page.querySelector('div.news p'));
        }
      };
      for(let i=max_news; i>=min_news; --i) {
        const fileName = 'news' + i + '.php';
        xhttp.open("GET", '/news/'+fileName , false);
        xhttp.send();
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
