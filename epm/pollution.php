<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Загрязнение атмосферного воздуха">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Загрязнение атмосферного воздуха</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Загрязнение атмосферного воздуха</h3>
      <?
      $sql = "select `date`, `description` from `ugmslnr`.`pollution` order by `date` desc limit 1";
      $row = get_row($conn, $sql);  
      $date = date("d.m Y", strtotime($row['date']));    
      ?>
      <p>Прогноз уровня загрязнения атмосферного воздуха в г. Луганске и городах Луганской Народной Республики на <?=$date?> года</p>
      <p><?=$row['description']?></p>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
