<? $news_title = "Алчевск присоединился к Всероссийскому субботнику 2025"; ?>
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
      <p>В рамках федерального проекта «Формирование комфортной городской среды» национального проекта
        «Инфраструктура для жизни», а также в целях благоустройства и повышения качества городской среды, 25
        апреля коллектив ФГБУ «УГМС по ЛНР» принял активное участие в проведении работ по наведению порядка на
        прилегающей территории в соответствии с нормами благоустройства. Проведена уборка листвы, сухих веток и
        мусора.</p>
      <div class='img-carousel' style='max-height: 43em'>
        <img src='1.png'>
        <img src='2.png'>
        <img src='3.png'>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>