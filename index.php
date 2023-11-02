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
      <h1> Последние новости </h1>
      <div id='news-container'>
        <?
        $sql = "
        select id, title, `desc`
        from `ugmslnr`.`news`
        order by id desc
        ";
        $data = get_arr($conn, $sql);
        foreach($data as $row){ ?>
          <a href="/views/news.php?id=<?=$row['id']?>">
            <div>
              <h3 class='news-title'> <?=$row['title']?> </h3>
              <?=substr($row['desc'], 0, strpos($row['desc'], '</p>')). '...'?>
            </div>
          </a>
        <? } ?>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
