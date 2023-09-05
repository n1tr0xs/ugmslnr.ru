<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Комментарии синоптика</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <? 
      $sql = "select `date`, `comment` from `ugmslnr`.`sinop_comments` order by `date` desc limit 1";
      $row = get_row($conn, $sql);
      ?>
      <h3> Комментарии синоптика от <?=format_date($row['date'])?></h3>
      <p><?=$row['comment']?></p>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
