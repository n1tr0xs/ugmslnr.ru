<? $news_title="Для студентов кафедры географии факультета естественных наук ФГБОУ ВО «ЛГПУ» организованы профориентационные экскурсии в ФГБУ «УГМС по ЛНР»"; ?>
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
    <div class='text-center'><img src='1.jpg'></div>
<p> В соответствии с «Планом проведения мероприятий регионального уровня, посвященных 190-летию Гидрометеорологической службы в России», в целях популяризации гидрометеорологической деятельности и укрепления сотрудничества с образовательными учреждениями, 04 и 18 июня 2024 года ФГБУ «УГМС по ЛНР» организовало профориентационные экскурсии для студентов кафедры географии факультета естественных наук ФГБОУ ВО «ЛГПУ».</p>
<p>В рамках экскурсий студенты посетили метеорологическую станцию I разряда Луганск, на которой установлены современные метеорологические, агрометеорологические приборы и оборудование. Метеостанция оснащена автоматизированным метеорологическим комплексом (МКС-М6) для выполнения наблюдений, а также программным комплексом, обеспечивающим сбор, первичную обработку, накопление и передачу результатов измерений. </p>
<p> Студенты посетили модернизированный пост наблюдения за загрязнением атмосферного воздуха, где они ознакомились с методами проведения работ по определению качества атмосферного воздуха.</p>
<p> В отделе метеорологических и численных прогнозов им подробно рассказали о составлении метеорологических прогнозов различной заблаговременности, предупреждениях об опасных метеорологических явлениях, а также прогнозах неблагоприятных метеорологических условий, способствующих накоплению вредных примесей в приземном слое атмосферы.</p>
<div class='img-carousel' style='max:height: 43em'>
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