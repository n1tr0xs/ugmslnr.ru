<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Радиационная обстановка">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Радиационная обстановка</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Радиационная обстановка</h3>
      <?
      $sql = "select * from `ugmslnr`.`radiation` order by `date` desc limit 1";
      $row = get_row($conn, $sql);
      ?>
      <p class="day"><?=date("d.m.Y", strtotime($row['date']))?></p>
      <p class="description"><?=$row['description']?></p>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
