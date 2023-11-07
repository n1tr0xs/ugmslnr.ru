<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <meta name="description" content="Главная страница УГМС по ЛНР">
  <title>УГМС по ЛНР - Федеральное государственное бюджетное учреждение</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <?
      $id = $conn->real_escape_string($_GET['id']);
      if($id) {
        $sql = "
        select id, title, `desc`
        from `ugmslnr`.`news`
        where id={$id}
        ";   
        $row = get_row($conn, $sql); ?>
        <h3 class='news-title'> <?=$row['title']?> </h3>
        <?=$row['desc']?>
      <? } ?>  
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
