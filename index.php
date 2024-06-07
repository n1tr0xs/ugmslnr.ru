<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <link rel="canonical" href="https://ugmslnr.ru/"/>
  <meta name="description" content="Главная страница УГМС по ЛНР. Новости.">
  <title>Новости</title>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
      const maxNews = 6;
      const files = [<?
        $file = fopen("news_order", "r");
        echo fread($file, filesize("news_order"));
        fclose($file);
      ?>];
      var queryDict = {}
      location.search.substr(1).split("&").forEach(function(item) {queryDict[item.split("=")[0]] = item.split("=")[1]})
      var currentPage = Number(queryDict['page'] || 0);
      
      const div = document.getElementById('news-container');
      const parser = new DOMParser();
      
      const slice = files.slice(currentPage*maxNews, (currentPage+1)*maxNews);
      links = [];
      for(let i=0; i<slice.length; ++i){
          a = document.createElement('a');
          links.push(a);
          div.appendChild(a);
      }
      
    for(let i=0; i<slice.length; ++i){
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            const page = parser.parseFromString(this.responseText, 'text/html');

            a = links[i];
            a.href = this.responseURL;
            
            d = document.createElement('div');
            a.appendChild(d);
            
            img = document.createElement('img');
            img.src = '/press/assets/' + slice[i] + '/' + page.querySelector('img.asset').src.split('/').pop();
            img.style = "width: 130px; float: left; margin-right: 1em;"
            d.appendChild(img);
            
            p_title = document.createElement('p');
            p_title.innerText = page.querySelector('title').innerText;
            p_title.classList.add('short-news-title');
            d.appendChild(p_title);
            
            var maxLength = 160;
            p_short = document.createElement('p');
            p_short_text = '';
            page.querySelector('div#content').querySelectorAll('p').forEach((element)=>{p_short_text += element.innerText + ' '});
            
            //trim the string to the maximum length
            var trimmedString = p_short_text.substr(0, maxLength);
            //re-trim if we are in the middle of a word
            trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")));
            p_short.innerText = trimmedString + '...';
            p_short.classList.add('short-news-description');
            d.appendChild(p_short);
          }
        };
        xhttp.open('GET', '/press/' + slice[i] + '.php', true);
        xhttp.send();
      };
      
      const div_content = document.getElementById('content');
      
      prev_p = document.createElement('p');
      prev_a = document.createElement('a');
      prev_a.href = '?page=' + (currentPage-1);
      prev_a.innerText = '⇽ Предыдушая страница';
      prev_p.appendChild(prev_a);
      if(currentPage > 0) div_content.appendChild(prev_p);
      
      next_p = document.createElement('p');
      next_p.classList.add('text-right');
      next_a = document.createElement('a');
      next_a.href = '?page=' + (currentPage+1);
      next_a.innerText = 'Следующая страница ⇾';
      next_p.appendChild(next_a);
      if(currentPage < Math.floor(files.length/maxNews)) div_content.appendChild(next_p);
    }, false);
  </script>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
        <h3> Новости </h3>
        <div id='news-container'>
            <noscript>Разрешите JavaScript, чтобы увидеть список новостей.</noscript>
        </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
