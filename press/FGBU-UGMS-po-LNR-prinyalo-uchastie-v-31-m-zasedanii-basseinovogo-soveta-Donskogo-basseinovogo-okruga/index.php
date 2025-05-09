<? $news_title = "ФГБУ «УГМС по ЛНР» приняло участие в 31-м заседании бассейнового совета Донского бассейнового округа"; ?>
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
      <img src='1.png' class='news-img-left'>
      <p>19 февраля 2025 года в городе Тамбов Тамбовской области состоялось 31-е заседание бассейнового совета
        Донского бассейнового округа под председательством руководителя Донского бассейнового водного управления
        Росводресурсов Е.В. Дорожкина.</p>
      <p>В заседании бассейнового совета приняли участие представители Донского БВУ, филиалов ФГБВУ
        «Центррегионводхоз» на территории деятельности Донского БВУ, Азово-Черноморского росрыболовства,
        Росгидромета, органов государственной власти субъектов Российской Федерации, расположенных в бассейне
        реки Дон.</p>
      <p>В заседании бассейнового совета приняли участие Хохлова О.Н. - начальник отдела
        организационно-аналитического обеспечения гидрометеорологической информацией Департамента Росгидромета
        по ЮФО и СКФО и начальник ФГБУ «УГМС по ЛНР» Баева И.Н. Участникам заседания была доведена информация о
        складывающейся гидрометеорологической обстановке в бассейне реки Дон.</p>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>