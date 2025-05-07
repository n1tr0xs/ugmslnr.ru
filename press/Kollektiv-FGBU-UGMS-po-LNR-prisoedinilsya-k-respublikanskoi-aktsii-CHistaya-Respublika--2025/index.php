<? $news_title="Коллектив ФГБУ «УГМС по ЛНР» присоединился к республиканской акции «Чистая Республика – 2025»"; ?>
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
            <h3><?=$news_title;?></h3>
            <p>16 апреля, согласно распоряжению Главы ЛНР «О проведении республиканской акции «Чистая Республика –
                2025», в целях обеспечения экологически благоприятной среды для проживания населения на территории ЛНР,
                коллектив ФГБУ «УГМС по ЛНР» принял активное участие в проведении работ по наведению порядка на
                прилегающей территории в соответствии с нормами благоустройства.</p>
            <p>Проведена уборка старой листвы, сухих веток и мусора. Вырублен сухостой. Побелены стволы деревьев,
                оформлены клумбы и посажены цветы.</p>
            <p>Прекрасная погода и сплоченные действия коллектива учреждения позволили справиться с большим объемом
                работы быстро и качественно! Слаженная работа помогла навести чистоту и порядок после зимы!</p>
            <div class='img-carousel' style='max-height: 43em'>
                <img src='1.png'>
                <img src='2.png'>
                <img src='3.png'>
            </div>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>