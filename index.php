<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/master.css">
    <meta charset="utf-8">
    <title>УГМС по ЛНР - Федеральное государственное бюджетное учреждение</title>
    <script type="text/javascript">
    function loadFile(filePath) {
      var result = null;
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", filePath, false);
      xmlhttp.send();
      if (xmlhttp.status==200) {
        result = xmlhttp.responseText;
      }
      return result;
    }

    document.addEventListener('DOMContentLoaded', function(){
      var min_news = 1;
      var max_news = 2;
      var folder = '/news/short_news/';
      var div = document.getElementById('news-container');
      for(let i=max_news; i>=min_news; --i) {
        let fileName = 'short_news' + i + '.php';
        div.innerHTML += loadFile(folder + fileName);
      }
    }, false);
    </script>
</head>
<body>
  <? include 'header.php'; ?>
  <div id='content'>
    <h1> Последние новости </h1>
    <div id='news-container'>
    </div>
  </div>
  <? include 'footer.php'; ?>
</body>
</html>
