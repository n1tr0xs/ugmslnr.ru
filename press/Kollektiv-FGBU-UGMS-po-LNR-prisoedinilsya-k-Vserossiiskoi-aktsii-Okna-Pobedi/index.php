<? $news_title = "Коллектив ФГБУ «УГМС по ЛНР» присоединился к Всероссийской акции «Окна Победы»"; ?>
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
      <div class='img-carousel' style='max-height: 43em'>
        <img src='1.png'>
        <img src='2.png'>
      </div>
      <p>В преддверии самого главного праздника весны &ndash; Юбилея Великой Победы, коллектив ФГБУ &laquo;УГМС по
        ЛНР&raquo; присоединился к Всероссийской акции &laquo;Окна Победы&raquo;.</p>
      <p>С 1 апреля по 9 мая 2025 года проводится Всероссийская акция &laquo;Окна Победы&raquo;, которая
        осуществляется в формате оформления окон квартир, домов, учреждений с использованием рисунков, картинок,
        фотографий и надписей, посвященных 80-летию Победы в Великой Отечественной войне.</p>
      <p>Акция направлена на сохранение традиций и передачу памяти о Великой Победе молодому поколению.
        &laquo;Окна Победы&raquo; &ndash; это инициатива, которая позволяет людям выразить благодарность
        ветеранам Великой Отечественной войны, почтить память погибших и отметить День Победы. Объединившись,
        каждый внесет свой маленький вклад в сохранение истории и празднование 80-й годовщины Великой Победы.
      </p>
      <p>Годы уходят, но память о подвиге героев не меркнет!</p>
      <div class='img-carousel' style='max-height: 43em'>
        <img src='3.png'>
        <img src='4.png'>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>