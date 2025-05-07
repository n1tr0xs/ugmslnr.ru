<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta name="description" content="Загрязнение атмосферного воздуха">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Загрязнение атмосферного воздуха</title>
</head>

<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h2> Загрязнение атмосферного воздуха</h2>
      <?
      $sql = "
      select `date`, `description` 
      from `ugmslnr`.`pollution` 
      order by `date` desc 
      limit 1
      ";
      $row = get_row($conn, $sql);
      if ($row) { ?>
        <p><?= $row['description'] ?></p>
      <? } ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>