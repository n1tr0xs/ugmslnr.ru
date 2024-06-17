<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
    <link rel="canonical" href="https://ugmslnr.ru/"/>
    <meta name="description" content="Новости">
    <title>Новости</title>
</head>
<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3> Новости </h3>
            <div id='news-container'>
                <noscript>Разрешите JavaScript, чтобы увидеть список новостей.</noscript>
                <script async type="text/javascript">
                    const maxNews = 6;
                    const files = [<?
                        echo file_get_contents($_SERVER['DOCUMENT_ROOT']. "/news_order");
                    ?>];
                    var queryDict = {};
                    location.search.substr(1).split("&").forEach(function(item) {queryDict[item.split("=")[0]] = item.split("=")[1]});
                    var currentPage = Number(queryDict['page'] || 0);
                    
                    const parser = new DOMParser();
                    
                    const slice = files.slice(currentPage*maxNews, (currentPage+1)*maxNews);
                    for(let i=0; i<slice.length; ++i) {
                        const xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                const page = parser.parseFromString(this.responseText, 'text/html');
                                
                                const div_news = document.getElementById('news-container');
                                
                                a = document.createElement('a');
                                a.href = this.responseURL;
                                div_news.appendChild(a);
                                a.style = "order: " + i + ';';
                                d = document.createElement('div');
                                a.appendChild(d);
                                
                                // картинка с новости
                                img = document.createElement('img');
                                ext_img = page.querySelector('#content img');
                                if(ext_img != null) {
                                    img.src = '/press/' + slice[i] + '/' + ext_img.src.split('/').pop();
                                    img.style = "width: 130px; float: left; margin-right: 1em;"
                                }
                                d.appendChild(img);
                                
                                // короткий заголовок для новости
                                p_title = document.createElement('p');
                                title = page.querySelector('title');
                                if(title != null) {
                                    p_title.innerText = title.innerText;
                                    p_title.classList.add('short-news-title');
                                }
                                d.appendChild(p_title);
                                
                                var maxLength = 180;
                                p_short = document.createElement('p');
                                p_short_text = '';
                                page.querySelector('div#content').querySelectorAll('p').forEach((element)=>{p_short_text += element.innerText + ' '});
                                
                                // обрезаем до максимальной длины
                                var trimmedString = p_short_text.substr(0, maxLength);
                                // переобрезаем, если оказались посреди слова
                                trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")));
                                p_short.innerText = trimmedString + '...';
                                p_short.classList.add('short-news-description');
                                d.appendChild(p_short);
                            }
                        };
                        xhttp.open('GET', '/press/' + slice[i] + '/', true);
                        xhttp.send();
                    };
                    
                    const div_content = document.getElementById('content');
                    // блок со ссылками на пред . след страницы новостей
                    prev_next = document.createElement('div');
                    prev_next.classList.add('clear');
                    prev_next.style = "\
                    display: flex; \
                    justify-content: space-between;\
                    "
                    div_content.appendChild(prev_next);
                    
                    // ссылка на предыдущую страницу новостей
                    prev_p = document.createElement('p');
                    if(currentPage > 0) {
                    prev_a = document.createElement('a');
                    prev_a.href = '?page=' + (currentPage-1);
                    prev_a.innerText = '⇽ Предыдушая страница';
                    prev_p.appendChild(prev_a);
                    }
                    prev_next.appendChild(prev_p)
                    
                    // ссылка на следующую страницу новостей
                    next_p = document.createElement('p');
                    if(currentPage < Math.floor(files.length/maxNews)) {
                    next_a = document.createElement('a');
                    next_a.href = '?page=' + (currentPage+1);
                    next_a.innerText = 'Следующая страница ⇾';
                    next_p.appendChild(next_a);
                    }
                    prev_next.appendChild(next_p);
                </script>
            </div>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>