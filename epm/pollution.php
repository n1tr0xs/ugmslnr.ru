<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Загрязнение атмосферного воздуха</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
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
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
