<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta name="description" content="Радиационная обстановка">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title>Радиационная обстановка</title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h2>Радиационная обстановка</h2>
            <?
            $sql = "
      select * 
      from `ugmslnr`.`radiation` 
      order by `date` desc 
      limit 1";
            $row = get_row($conn, $sql);
            if ($row) { ?>
                <p class="description"><?= $row['description'] ?></p>
            <? } ?>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>