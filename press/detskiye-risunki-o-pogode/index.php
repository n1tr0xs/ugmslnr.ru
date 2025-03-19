<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <meta name="description" content="Детские рисунки о погоде">
  <link rel="canonical" href="<?
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    $uri[count($uri)-1] = '';
    echo 'https://'. $_SERVER['HTTP_HOST']. join('/', $uri);
  ?>
  "/>
  <title>Детские рисунки о погоде</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
        <h3>Детские рисунки о погоде</h3>
        <p>В рамках мероприятий, посвященных 190-летию гидрометеорологической службы России, в ФГБУ «УГМС по ЛНР» был объявлен конкурс детского рисунка «Погода - глазами детей».</p>
        <p>Мы представляем вашему вниманию работы, которые выполнили дети наших сотрудников.</p>
        <p>Трудно выбрать из них "самые-самые". Все рисунки очень интересные.</p>
        <p>По итогам конкурса все юные художники были награждены грамотами и сладкими подарками.</p>
        <div class="clear img-carousel" style="max-height: 43em;">
            <img src="8.jpg" class="h50"/>
            <img src="1.jpg" class="h50"/>
            <img src="2.jpg" class="h50"/>
            <img src="3.jpg" class="h50"/>
            <img src="4.jpg" class="h50"/>
            <img src="5.jpg" class="h50"/>
            <img src="6.jpg" class="h50"/>
            <img src="7.jpg" class="h50"/>
            <img src="9.jpg" class="h50"/>
        </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
