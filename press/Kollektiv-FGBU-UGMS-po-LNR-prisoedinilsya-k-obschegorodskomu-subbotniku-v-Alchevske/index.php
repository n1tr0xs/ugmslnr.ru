<? $news_title="Коллектив ФГБУ «УГМС по ЛНР» присоединился к общегородскому субботнику в Алчевске"; ?>
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
    <div class='text-center'><img src='1.jpg'  style="max-height: 25em;"></div>
<p>В преддверии самого главного праздника весны &ndash; Юбилея Великой Победы, коллектив ФГБУ &laquo;УГМС по ЛНР&raquo; 24 марта присоединился к общегородскому субботнику в Алчевске, чтобы внести свой вклад в подготовку города к 9 Мая.</p>
<p>Проведена работа по наведению порядка на прилегающей территории в соответствии с нормами благоустройства.</p>
<p>Произведена уборка листвы, сухих деревьев, веток и мусора.</p>
<p>Прекрасная погода и сплоченные действия коллектива учреждения позволили справиться с большим объемом работы быстро и качественно! Слаженная работа помогла навести чистоту и порядок!</p>
<div class='img-carousel' style='max-height: 43em'>
	<img src='2.jpg'>
	<img src='3.jpg'>
	<img src='4.jpg'>
	<img src='5.jpg'>
</div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
