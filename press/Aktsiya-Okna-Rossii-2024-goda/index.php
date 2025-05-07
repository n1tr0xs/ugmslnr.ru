<? $news_title="Акция Окна России 2024 года"; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <meta name="description" content="<?=$news_title;?>">
    <title><?=$news_title;?></title>
    <link rel="canonical" href="<?
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    $uri[count($uri)-1] = '';
    echo 'https://'. $_SERVER['HTTP_HOST']. join('/', $uri);
  ?>
  " />
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <img src="thumb.jpg" style="display: none">
            <h3><?=$news_title;?></h3>
            <p> В федеральном государственном бюджетном учреждении «Управление по гидрометеорологии и мониторингу
                окружающей среды по Луганской Народной Республике» проведена акция «Окна России», приуроченная к
                празднованию Дня России. </p>
            <div class='img-carousel' style="height: 40em;">
                <img src="0.jpg" class="h50" />
                <img src="1.jpg" class="h50" />
                <img src="2.jpg" class="h50" />
                <img src="3.jpg" class="h50" />
                <img src="4.jpg" class="h50" />
                <img src="5.jpg" class="h50" />
            </div>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>