<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <meta name="description" content="Поздравление руководителя Росгидромета с 8 Марта">
  <title>Поздравление руководителя Росгидромета с 8 Марта</title>
  <link rel="canonical" href="<?
  $uri = explode('/', $_SERVER['REQUEST_URI']);
  $uri[count($uri) - 1] = '';
  echo 'https://' . $_SERVER['HTTP_HOST'] . join('/', $uri);
  ?>
  " />
</head>

<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <!---->
      <h3>Поздравление руководителя Росгидромета с 8 Марта</h3>
      <img src="1.jpg" width="300px" class='asset news-img-left' />
      <p>Дорогие наши женщины! Поздравляю вас с Международным женским днём! Этот замечательный весенний праздник
        наполнен нежностью, теплотой и улыбками.</p>
      <p>8 Марта – это еще одна возможность поблагодарить наших женщин за душевную чуткость, доброту, способность
        совмещать свои профессиональные навыки с материнством и верностью домашнему очагу.</p>
      <p>Ваше обаяние, трудолюбие и искренность наполняют нас, мужчин, уверенностью и стремлением покорять новые
        вершины.</p>
      <p>Желаю вам оставаться такими же любимыми и красивыми, пусть ваша жизнь будет наполнена яркими красками,
        радостью, гармонией и любовью родных людей!</p>
      <div class='text-right' style="clear: both">
        <p> Руководитель Росгидромета <br> Игорь Шумаков </p>
      </div>
      <!---->
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>