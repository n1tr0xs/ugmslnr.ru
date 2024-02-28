<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Комментарии синоптика">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Комментарии синоптика</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
        <h2>Комментарии синоптика</h2>
      <? 
      $sql = "
      select `date`, `comment` 
      from `ugmslnr`.`sinop_comments` 
      order by `date` desc 
      limit 1
      ";
      $row = get_row($conn, $sql);
      if($row) { ?>
        <h3> Комментарии синоптика от <?=format_date($row['date'])?></h3>
        <p><?=$row['comment']?></p>
      <? } ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
