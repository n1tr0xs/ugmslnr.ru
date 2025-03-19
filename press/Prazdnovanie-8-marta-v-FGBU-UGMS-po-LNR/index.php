<? $news_title="Празднование 8 марта в ФГБУ «УГМС по ЛНР»"; ?>
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
    <p>В преддверии Международного женского дня, 07.03.2025 года для представительниц прекрасной половины ФГБУ «УГМС по ЛНР» были проведены мероприятия, посвященные празднованию Международного женского дня. </p>
<p>В этот день особенные слова прозвучали для женщин, чьи сыновья и мужья с честью выполняют свой воинский долг на СВО. Их поздравили первыми весенними цветами и памятными подарками. </p>
<p>Также в рамках торжественного мероприятия проведена выставка детского творчества «Самым милым и любимым», в которой активное участие приняли дети сотрудников учреждения.</p>

<div class='img-carousel' style='max-height: 43em'>
	<img src='1.png'>
	<img src='2.png'>
</div>

    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
