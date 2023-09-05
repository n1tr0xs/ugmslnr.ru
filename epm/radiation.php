<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Радиационная обстановка</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
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
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
