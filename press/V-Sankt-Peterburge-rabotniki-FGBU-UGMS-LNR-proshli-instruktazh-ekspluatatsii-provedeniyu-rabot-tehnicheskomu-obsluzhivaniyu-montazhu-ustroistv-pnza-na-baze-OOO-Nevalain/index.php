<? $news_title="В Санкт-Петербурге работники ФГБУ «УГМС по ЛНР» прошли инструктаж по эксплуатации, проведению работ по техническому обслуживанию, монтажу устройств поста наблюдения за загрязнением атмосферного воздуха на базе ООО «Невалайн»"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <div class='text-center'><img src='1.jpg' style='max-height: 43em'></div>
<p> В рамках реализации распоряжения Правительства Российской Федерации от 21.04.2023 № 1019-р «Об утверждении программы социально-экономического развития Донецкой Народной Республики, Луганской Народной Республики, Запорожской области и Херсонской области» в период с 13 по 16 августа 2024 года  в г. Санкт-Петербург, на базе ООО «Невалайн», 3 работника ФГБУ «УГМС по ЛНР» прошли инструктаж по эксплуатации, проведению работ по техническому обслуживанию, монтажу устройств поста наблюдения за загрязнением атмосферного воздуха.</p>
<p> В рамках прохождения инструктажа были освещены актуальные вопросы по системе жизнеобеспечения поста наблюдения за загрязнением атмосферного воздуха, а также вопросы по сбору, обработке и хранению данных о составе атмосферного воздуха, получаемых со средств измерений в автоматическом режиме с помощью программно-аппаратного комплекса «НеваЭко».</p>
<p> С рабочим визитом работники ФГБУ «УГМС по ЛНР» посетили ФГБУ «ГГО», ФГБУ «Северо-Западное управление по гидрометеорологии и мониторингу окружающей среды», центральный офис «Люмэкс», где обсудили со специалистами текущие оперативно-производственные вопросы и перспективы восстановления и развития сети мониторинга загрязнения атмосферного воздуха.</p>
<div class='img-carousel' style='max-height: 43em'>
	<img src='2.jpg'>
	<img src='3.jpg'>
	<img src='4.jpg'>
</div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>