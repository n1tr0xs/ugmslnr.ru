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
    <--CONTENT-->
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
