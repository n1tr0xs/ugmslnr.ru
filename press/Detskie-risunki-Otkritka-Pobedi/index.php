<? $news_title = "Детские рисунки «Открытка Победы»!"; ?>
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
      <p> В рамках мероприятий, посвященных празднованию 80-й годовщины Победы в Великой Отечественной войне 1941
        – 1945 годов, в ФГБУ «УГМС по ЛНР» проведена выставка детского творчества «Открытка Победы». В выставке
        активное участие приняли работы детей работников учреждения.</p>
      <p>Выставка направлена на сохранение традиций и передачу памяти о Великой Победе молодому поколению. Годы
        уходят, но память о подвиге героев не меркнет! </p>
      <div class='img-carousel' style='max-height: 43em'>
        <img src='1.jpg'>
        <img src='2.png'>
        <img src='3.png'>
        <img src='4.png'>
        <img src='5.png'>
        <img src='6.jpg'>
        <img src='7.jpg'>
        <img src='8.jpg'>
        <img src='9.jpg'>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>