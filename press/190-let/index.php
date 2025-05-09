<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <meta name="description" content="190 лет Гидрометеорологической службе России">
  <title>190 лет Гидрометеорологической службе России</title>
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
      <div class='text-center'>
        <img src="190.png" style="width: 50%" />
      </div>
      <p>В 2024 году исполняется 190 лет Гидрометеорологической службе России, которая ведет свое начало с
        образования в 1834 году в г. Санкт-Петербурге Нормальной магнитно-метеорологической обсерватории в
        соответствии с Указом Императора Николая I.</p>
      <p>В соответствии с распоряжением Правительства Российской Федерации от 02.11.2023 № 3068-р запланировано
        проведение ряда мероприятий, посвященных 190-летию со дня создания Гидрометеорологической службы России,
        которые призваны подчеркнуть значительную роль нашей службы в создании и обеспечении
        гидрометеорологической безопасности государства, развитии секторов экономики страны, поддержании
        высокого престижа на национальном и международном уровнях.</p>
      <img src="kollaz.png" />
      <p><a href="mishustin1.png">Распоряжение Председателя Правительства Российской Федерации Мишустина М.В.</a>
      </p>
      <p><a href="Plan_RGM_190.pdf">План проведения мероприятий, посвященных 190-летию Гидрометеорологической
          службы России</a></p>
      <p><a href="https://cloud.mail.ru/public/GRYj/7a3CihArY">Официальная символика 190 лет Гидрометслужбы
          России</a></p>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>