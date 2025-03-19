<? $news_title="Коллектив ФГБУ «УГМС по ЛНР» присоединился к Всероссийскому субботнику «Зеленая Россия»"; ?>
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
  "/>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
        <h3><?=$news_title;?></h3>
    <div class='text-center'><img src='1.png' style="width: 50em;"></div>
<p>27 сентября, в целях обеспечения экологически благоприятной среды для проживания населения на территории ЛНР, коллектив ФГБУ «УГМС по ЛНР» принял активное участие во Всероссийском субботнике «Зеленая Россия». Проведена работа по наведению порядка на прилегающей территории в соответствии с нормами благоустройства. </p>
<p>Произведена уборка листвы, сухих деревьев, веток и мусора. Вырублен сухостой.</p>
<p>Прекрасная погода и сплоченные действия коллектива учреждения позволили справиться с большим объемом работы быстро и качественно! Слаженная работа помогла навести чистоту и порядок!</p>

    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
