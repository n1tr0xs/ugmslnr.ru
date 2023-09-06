<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Просмотр предупреждения</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <? 
      $id = $_GET['id'];
      $sql = "
      select type, description 
      from `ugmslnr`.`warnings` 
      where id={$id}
      ";
      $row = get_row($conn, $sql);
      ?>
      <h3> Предупреждение категории <?=mb_strtolower($row['type'])?> </h3>
      <p> <?=$row['description']?> </p>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
