<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta name="description" content="Предупреждение по ЛНР № <?= $_GET['id']; ?>">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title>Просмотр предупреждения № <?= $_GET['id']; ?></title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
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
            <h3> Предупреждение категории <?= mb_strtolower($row['type']) ?> </h3>
            <p> <?= $row['description'] ?> </p>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>