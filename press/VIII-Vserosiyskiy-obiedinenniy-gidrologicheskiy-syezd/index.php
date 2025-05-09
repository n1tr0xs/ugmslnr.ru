<? $news_title = "VIII Всероссийский объединенный метеорологический  и гидрологический съезд"; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <meta name="description" content="<?= $news_title; ?>">
  <title><?= $news_title; ?></title>
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
      <h3><?= $news_title; ?></h3>
      <p> Начальник ФГБУ «УГМС по ЛНР» Ирина Баева, заместитель начальника учреждения – начальник гидрометцентра
        ЛНР Светлана Шубенок и начальник отдела гидрологии гидрометцентра ЛНР Наталья Рязанова приняли участие в
        VIII Всероссийском объединенном метеорологическом и гидрологическом съезде (ВОМГС-8). </p>
      <p>Мероприятие проходило в период с 29 по 31 октября 2024 года
        в Санкт-Петербурге на площадках Конгрессно-выставочного центра «ЭКСПОФОРУМ».</p>
      <div class='img-carousel' style='max-height: 43em'>
        <img src='1.png'>
        <img src='2.png'>
        <img src='3.png'>
      </div>
      <p>Основная цель Съезда - обсуждение наиболее актуальных проблем метеорологической и гидрологической науки и
        практики в условиях изменения климата, выработка рекомендаций по консолидации имеющегося в стране
        научно-технического и производственного потенциала для решения приоритетных задач
        в области метеорологии и климата, гидрологии и водного хозяйства, а также развитие взаимодействия
        научных сообществ на национальном и международном уровнях.</p>
      <div class='text-center'><img src='4.png' style="height: 20em"></div>
      <p>В рамках проведения ВОМГС-8 на площадке центра «ЭКСПОФОРУМ» состоялась XIV выставка «Погода. Климат. Вода
        / Дистанционное зондирование Земли / Зеленая экономика» 2024. В выставке принимали участие все
        отечественные производители гидрометеорологических приборов и оборудования, поставщики услуг для
        метеозависимых отраслей экономики, а также разработчики программного обеспечения для гидрометеорологии,
        системные интеграторы, поставщики решений в сфере дистанционного зондирования Земли.</p>
      <p>VIII Всероссийский объединенный метеорологический и гидрологический съезд стал самым крупным мероприятием
        в области гидрологии и метеорологии за последние четыре десятилетия. В съезде приняли участие более
        восемьсот человек, включая Заместителя Председателя Правительства, членов Правительства Российской
        Федерации, представителей федеральных и региональных органов власти, научных учреждений, представителей
        30 зарубежных гидрометслужб и международных организаций, в том числе, руководство Всемирной
        метеорологической организации.</p>
      <p>Церемонию официального закрытия съезда провел руководитель Росгидромета Игорь Шумаков.</p>
      <div class='text-center'><img src='6.png' style="height: 20em"></div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>