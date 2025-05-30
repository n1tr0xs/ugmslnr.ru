<? $news_title = "В г. Балашиха Московской области специалист ФГБУ «УГМС по ЛНР» прошла курс очного обучения «Применение ГИС-технологий в работе специалистов прогностических подразделений учреждений Росгидромета»"; ?>
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
      <p> С 2 3 по 27 сентября ФГБОУ на базе ДПО «ИПК» Росгидромета синоптик Гидрометцентра ЛНР Семенова Инна
        Ивановна прошла очное обучение
        по программе повышения квалификации «Применение ГИС-технологий в работе специалистов прогностических
        подразделений учреждений Росгидромета»
        по направлению синоптической метеорологии. К учебным занятиям в качестве преподавателей были привлечены
        сотрудники разработчика программного комплекса «ГИС-МЕТЕО». – ООО «Научно-производственный центр «Мэп
        Мейкер». </p>
      <p>В ходе обучения специалисты прогностических подразделений управлений
        по гидрометеорологии и мониторингу окружающей среды освоили основы работы
        в ПК «ГИС-МЕТЕО», совместно с разработчиками программного комплекса решали прикладные производственные
        задачи прогнозирования погодных условий.</p>
      <div class='text-center'><img src='1.png'></div>
      <p>Очные курсы стали площадкой для обмена практическим опытом между специалистами прогностических
        подразделений, их взаимодействия
        с разработчиками программного обеспечения.</p>
      <p>Участники курсов с рабочим визитом посетили Гидрометцентр России, где познакомились с технологией и
        спецификой работы его подразделений.</p>
      <div class='text-center'><img src='2.png'></div>
      <p>В рамках проведения экскурсии для обучающихся была организована встреча
        с научным руководителем Гидрометцентра России Р.М. Вильфандом.</p>
      <div class='text-center'><img src='3.png'></div>

    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>